<?php

namespace App\Http\Controllers;

use App\Exceptions\Test\Questions\QuestionsListOver;
use App\Models\Question;
use App\Models\Test;
use App\Models\TestSession;
use App\UseCases\RetrieveNextQuestion;
use App\UseCases\RetrieveTopResults;
use App\UseCases\StartTestSession;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function index()
    {
        return view(
            'pages.tests.index',
            [
                'tests' => Test::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    public function store(Request $request)
    {
        //
    }

    public function show(
        $testId,
        Request $request,
        RetrieveNextQuestion $retrieveNextQuestion,
        StartTestSession $startSession,
        RetrieveTopResults $retrieveTopResults
    ) {
        $testSessionId = $request->query->get('sid');
        if (!TestSession::whereId($testSessionId)->exists()) {
            $testSession = $startSession($testId);

            return $this->startedSessionRedirect($testId, $testSession->id);
        }

        return $this->displayNextQuestionOrPollResult(
            $retrieveNextQuestion,
            $testSessionId,
            $retrieveTopResults
        );
    }

    public function edit($id)
    {
        $test = Test::with('questions')->findOrFail($id);
        return view('pages.tests.edit', compact('test'));
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
    }

    private function startedSessionRedirect($testId, $testSessionId): RedirectResponse
    {
        return redirect()
            ->route(
                'tests.show',
                [
                    'test' => $testId,
                    'sid'  => $testSessionId,
                ]
            );
    }

    private function displayPollResult(RetrieveTopResults $retrieveTopResults, int $testSessionId)
    {
        return view(
            'pages.tests.result',
            [
                'topScores' => $retrieveTopResults($testSessionId, 7)
            ]
        );
    }

    private function displayQuestion(Question $question, int $testSessionId)
    {
        return view(
            'pages.tests.show',
            [
                'question'      => $question,
                'testSessionId' => $testSessionId,
            ]
        );
    }

    private function retrieveQuestion(RetrieveNextQuestion $retrieveNextQuestion, int $testSessionId): Question
    {
        $question = $retrieveNextQuestion($testSessionId);
        $question->load('answerOptions');

        return $question;
    }

    private function displayNextQuestionOrPollResult(
        RetrieveNextQuestion $retrieveNextQuestion,
        int $testSessionId,
        RetrieveTopResults $retrieveTopResults
    ) {
        try {
            $question = $this->retrieveQuestion(
                $retrieveNextQuestion,
                $testSessionId
            );

            return $this->displayQuestion(
                $question,
                $testSessionId
            );
        } catch (QuestionsListOver $e) {
            return $this->displayPollResult(
                $retrieveTopResults,
                $testSessionId
            );
        }
    }
}
