<?php


namespace App\Http\Controllers;


use App\Models\AnswerOption;
use App\Models\Question;
use App\Models\Result;
use App\Models\Test;
use App\UseCases\AnswerTheQuestion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final class QuestionsController  extends Controller
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
        $averageSignificance = $this->averageSignificance($question->test, $question);

        $questionsToFollow = Question::all();

        return view('pages.questions.edit', compact('question', 'averageSignificance', 'questionsToFollow'));
    }

    private function averageSignificance(Test $test, $excludeId = 0): int
    {
        return $test->questions()
            ->where('id', '<>', $excludeId)
            ->select(\DB::raw('AVG(significance) as average_significance'))
            ->first()['average_significance'];
    }

    public function update($id, Request $request)
    {
        $question = Question::findOrFail($id);
        $question->update($request->input('q'));

        foreach ($request->input('ans_opt') as $optionId => $opt) {
            $option = AnswerOption::findOrFail($optionId);
            $option->content = $opt['content'];
            $option->results()->detach();

            $option->leadsToQuestion()->sync($opt['leads_to'] ?? []);

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

    public function createEmpty(Request $request)
    {
        $test_id = $request->test_id;
        $test = Test::findOrFail($test_id);


        $question = new Question();
        $question->text = 'Question text';
        $question->test_id = $test_id;
        $question->significance = $this->averageSignificance($test);
        $question->save();

        foreach (
            [
                [
                    'content' => 'Так',
                    'results' => self::neutralAnswerSignificance(),
                ],
                [
                    'content' => 'Ні',
                    'results' => self::neutralAnswerSignificance(),
                ],
                [
                    'content' => 'Поки що не знаю',
                    'results' => self::neutralAnswerSignificance(),
                ],
            ] as $optionData
        ) {
            $option = new AnswerOption();
            $option->content = $optionData['content'];
            $option->question()->associate($question);
            $option->save();

            foreach ($optionData['results']['languages'] as $resultInfo) {
                $result = Result::whereLangName($resultInfo['lang_name'])->firstOrFail();
                $option->results()->attach(
                    [
                        $result->id => ['significance' => $resultInfo['significance']]
                    ]
                );
            }
        }
        return redirect()->back();

    }

    public function delete($id)
    {
        Question::whereId($id)->delete();
        return redirect()->back();
    }

    private static function neutralAnswerSignificance(): array
    {
        return
            [
                'languages' => [
                    [
                        'lang_name'    => 'C',
                        'significance' => 0,
                    ],
                    [
                        'lang_name'    => 'C++',
                        'significance' => 0,
                    ],
                    [
                        'lang_name'    => 'C#',
                        'significance' => 0,
                    ],
                    [
                        'lang_name'    => 'Java',
                        'significance' => 0,
                    ],
                    [
                        'lang_name'    => 'JavaScript',
                        'significance' => 0,
                    ],
                    [
                        'lang_name'    => 'TypeScript',
                        'significance' => 0,
                    ],
                    [
                        'lang_name'    => 'Objective-C',
                        'significance' => 0,
                    ],
                    [
                        'lang_name'    => 'PHP',
                        'significance' => 0,
                    ],
                    [
                        'lang_name'    => 'Python',
                        'significance' => 0,
                    ],
                    [
                        'lang_name'    => 'Ruby',
                        'significance' => 0,
                    ],
                    [
                        'lang_name'    => 'Scala',
                        'significance' => 0,
                    ],
                    [
                        'lang_name'    => 'Assembler',
                        'significance' => 0,
                    ],
                    [
                        'lang_name'    => 'Clojure',
                        'significance' => 0,
                    ],
                    [
                        'lang_name'    => 'Delphi',
                        'significance' => 0,
                    ],
                    [
                        'lang_name'    => 'Pascal',
                        'significance' => 0,
                    ],
                    [
                        'lang_name'    => 'F#',
                        'significance' => 0,
                    ],
                    [
                        'lang_name'    => 'Go',
                        'significance' => 0,
                    ],
                    [
                        'lang_name'    => 'Haskell',
                        'significance' => 0,
                    ],
                    [
                        'lang_name'    => 'Lua',
                        'significance' => 0,
                    ],
                    [
                        'lang_name'    => 'Perl',
                        'significance' => 0,
                    ],
                    [
                        'lang_name'    => 'Swift',
                        'significance' => 0,
                    ],
                    [
                        'lang_name'    => 'Visual Basic',
                        'significance' => 0,
                    ],
                ]
            ];
    }

}
