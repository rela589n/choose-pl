<?php


namespace App\Exceptions\Test\Questions;


use App\Models\TestSession;

final class QuestionsListOver extends \RuntimeException
{
    private TestSession $session;

    public function __construct(TestSession $session)
    {
        parent::__construct('Questions list is over');

        $this->session = $session;
    }

    public function getSession(): TestSession
    {
        return $this->session;
    }
}
