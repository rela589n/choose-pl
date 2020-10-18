<?php


namespace App\Http\Controllers;


use App\Models\AnswerOption;
use App\Models\Question;
use App\UseCases\AnswerTheQuestion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final class QuestionsController
{
    public function storeAnswer($questionId, Request $request, AnswerTheQuestion $answerQuestion): RedirectResponse
    {
        $testSessionId = $request->input('sid');
        $answerId = $request->input('answer');

        $answerQuestion($testSessionId, $questionId, $answerId);

        return redirect()->back();
    }

    public function edit($id)
    {
        /** @var Question $question */
        $question = Question::with('answerOptions')->findOrFail($id);
        $averageSignificance = (int)$question->test->questions()
            ->where('id', '<>', $id)
            ->select(\DB::raw('AVG(significance) as average_significance'))
            ->first()['average_significance'];

        return view('pages.questions.edit', compact('question', 'averageSignificance'));
    }

    public function update($id, Request $request)
    {
        $question = Question::findOrFail($id);
        $question->update($request->input('q'));

        foreach ($request->input('ans_opt') as $optionId => $opt) {
            $option = AnswerOption::findOrFail($optionId);
            $option->results()->detach();

            foreach ($opt['res'] as $resultId => $significance) {
                $option->results()->attach(
                    $resultId,
                    [
                        'significance' => $significance
                    ]
                );
            }
        }

        return redirect()->back();
    }
}
