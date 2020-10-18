<?php

namespace Database\Seeders;

use App\Models\AnswerOption;
use App\Models\Question;
use App\Models\Result;
use App\Models\Test;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class QuestionsSeeder extends Seeder
{
    private static function neutralAnswerSignificance(): array
    {
        return form(
            [
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
            ],
            true
        );
    }

    private static function languagesPopularity(bool $popular): array
    {
        return form(
            [
                [
                    'lang_name'    => 'C',
                    'significance' => 6,
                ],
                [
                    'lang_name'    => 'C++',
                    'significance' => 6,
                ],
                [
                    'lang_name'    => 'C#',
                    'significance' => 7,
                ],
                [
                    'lang_name'    => 'Java',
                    'significance' => 18,
                ],
                [
                    'lang_name'    => 'JavaScript',
                    'significance' => 8,
                ],
                [
                    'lang_name'    => 'TypeScript',
                    'significance' => 2,
                ],
                [
                    'lang_name'    => 'Objective-C',
                    'significance' => 3,
                ],
                [
                    'lang_name'    => 'PHP',
                    'significance' => 6,
                ],
                [
                    'lang_name'    => 'Python',
                    'significance' => 32,
                ],
                [
                    'lang_name'    => 'Ruby',
                    'significance' => 2,
                ],
                [
                    'lang_name'    => 'Scala',
                    'significance' => 1,
                ],
                [
                    'lang_name'    => 'Assembler',
                    'significance' => 1,
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
                    'significance' => 2,
                ],
                [
                    'lang_name'    => 'Haskell',
                    'significance' => 1,
                ],
                [
                    'lang_name'    => 'Lua',
                    'significance' => 1,
                ],
                [
                    'lang_name'    => 'Perl',
                    'significance' => 1,
                ],
                [
                    'lang_name'    => 'Swift',
                    'significance' => 3,
                ],
                [
                    'lang_name'    => 'Visual Basic',
                    'significance' => 1,
                ],
            ],
            $popular
        );
    }

    private static function languagesSalary(bool $high): array
    {
        return form(
            [
                [
                    'lang_name'    => 'C',
                    'significance' => 82_523,
                ],
                [
                    'lang_name'    => 'C++',
                    'significance' => 85_591,
                ],
                [
                    'lang_name'    => 'C#',
                    'significance' => 68_336,
                ],
                [
                    'lang_name'    => 'Java',
                    'significance' => 85_609,
                ],
                [
                    'lang_name'    => 'JavaScript',
                    'significance' => 82_564,
                ],
                [
                    'lang_name'    => 'TypeScript',
                    'significance' => 88_433,
                ],
                [
                    'lang_name'    => 'Objective-C',
                    'significance' => 102_173,
                ],
                [
                    'lang_name'    => 'PHP',
                    'significance' => 70_272,
                ],
                [
                    'lang_name'    => 'Python',
                    'significance' => 91_098,
                ],
                [
                    'lang_name'    => 'Ruby',
                    'significance' => 96_775,
                ],
                [
                    'lang_name'    => 'Scala',
                    'significance' => 115_827,
                ],
                [
                    'lang_name'    => 'Assembler',
                    'significance' => 35_150,
                ],
                [
                    'lang_name'    => 'Clojure',
                    'significance' => 104_148,
                ],
                [
                    'lang_name'    => 'Delphi',
                    'significance' => 51_545,
                ],
                [
                    'lang_name'    => 'Pascal',
                    'significance' => 63_419,
                ],
                [
                    'lang_name'    => 'F#',
                    'significance' => 98_285,
                ],
                [
                    'lang_name'    => 'Go',
                    'significance' => 116_313,
                ],
                [
                    'lang_name'    => 'Haskell',
                    'significance' => 123_585,
                ],
                [
                    'lang_name'    => 'Lua',
                    'significance' => 73_427,
                ],
                [
                    'lang_name'    => 'Perl',
                    'significance' => 93_753,
                ],
                [
                    'lang_name'    => 'Swift',
                    'significance' => 97_206,
                ],
                [
                    'lang_name'    => 'Visual Basic',
                    'significance' => 70_727,
                ],
            ],
            $high
        );
    }

    private static function languagesLowLevel(bool $lowLevel): array
    {
        return form(
            [
                [
                    'lang_name'    => 'C',
                    'significance' => 90,
                ],
                [
                    'lang_name'    => 'C++',
                    'significance' => 85,
                ],
                [
                    'lang_name'    => 'C#',
                    'significance' => 30,
                ],
                [
                    'lang_name'    => 'Java',
                    'significance' => 30,
                ],
                [
                    'lang_name'    => 'JavaScript',
                    'significance' => 10,
                ],
                [
                    'lang_name'    => 'TypeScript',
                    'significance' => 13,
                ],
                [
                    'lang_name'    => 'Objective-C',
                    'significance' => 70,
                ],
                [
                    'lang_name'    => 'PHP',
                    'significance' => 18,
                ],
                [
                    'lang_name'    => 'Python',
                    'significance' => 8,
                ],
                [
                    'lang_name'    => 'Ruby',
                    'significance' => 13,
                ],
                [
                    'lang_name'    => 'Scala',
                    'significance' => 21,
                ],
                [
                    'lang_name'    => 'Assembler',
                    'significance' => 100,
                ],
                [
                    'lang_name'    => 'Clojure',
                    'significance' => 73,
                ],
                [
                    'lang_name'    => 'Delphi',
                    'significance' => 41,
                ],
                [
                    'lang_name'    => 'Pascal',
                    'significance' => 48,
                ],
                [
                    'lang_name'    => 'F#',
                    'significance' => 32,
                ],
                [
                    'lang_name'    => 'Go',
                    'significance' => 14,
                ],
                [
                    'lang_name'    => 'Haskell',
                    'significance' => 17,
                ],
                [
                    'lang_name'    => 'Lua',
                    'significance' => 43,
                ],
                [
                    'lang_name'    => 'Perl',
                    'significance' => 16,
                ],
                [
                    'lang_name'    => 'Swift',
                    'significance' => 50,
                ],
                [
                    'lang_name'    => 'Visual Basic',
                    'significance' => 68,
                ],
            ],
            $lowLevel
        );
    }

    private static function languagesRecent(bool $old): array
    {
        return form(
            [
                [
                    'lang_name'    => 'C',
                    'significance' => 1972,
                ],
                [
                    'lang_name'    => 'C++',
                    'significance' => 1998,
                ],
                [
                    'lang_name'    => 'C#',
                    'significance' => 2000,
                ],
                [
                    'lang_name'    => 'Java',
                    'significance' => 1995,
                ],
                [
                    'lang_name'    => 'JavaScript',
                    'significance' => 1995,
                ],
                [
                    'lang_name'    => 'TypeScript',
                    'significance' => 2012,
                ],
                [
                    'lang_name'    => 'Objective-C',
                    'significance' => 1980,
                ],
                [
                    'lang_name'    => 'PHP',
                    'significance' => 1994,
                ],
                [
                    'lang_name'    => 'Python',
                    'significance' => 1989,
                ],
                [
                    'lang_name'    => 'Ruby',
                    'significance' => 1990,
                ],
                [
                    'lang_name'    => 'Scala',
                    'significance' => 2004,
                ],
                [
                    'lang_name'    => 'Assembler',
                    'significance' => 1948,
                ],
                [
                    'lang_name'    => 'Clojure',
                    'significance' => 2005,
                ],
                [
                    'lang_name'    => 'Delphi',
                    'significance' => 1995,
                ],
                [
                    'lang_name'    => 'Pascal',
                    'significance' => 1970,
                ],
                [
                    'lang_name'    => 'F#',
                    'significance' => 2005,
                ],
                [
                    'lang_name'    => 'Go',
                    'significance' => 2009,
                ],
                [
                    'lang_name'    => 'Haskell',
                    'significance' => 1990,
                ],
                [
                    'lang_name'    => 'Lua',
                    'significance' => 1993,
                ],
                [
                    'lang_name'    => 'Perl',
                    'significance' => 1987,
                ],
                [
                    'lang_name'    => 'Swift',
                    'significance' => 2014,
                ],
                [
                    'lang_name'    => 'Visual Basic',
                    'significance' => 1991,
                ],
            ],
            $old
        );
    }

    private static function languagesFunctional(bool $functional): array
    {
        return form(
            [
                [
                    'lang_name'    => 'C',
                    'significance' => 10,
                ],
                [
                    'lang_name'    => 'C++',
                    'significance' => 20,
                ],
                [
                    'lang_name'    => 'C#',
                    'significance' => 15,
                ],
                [
                    'lang_name'    => 'Java',
                    'significance' => 15,
                ],
                [
                    'lang_name'    => 'JavaScript',
                    'significance' => 80,
                ],
                [
                    'lang_name'    => 'TypeScript',
                    'significance' => 85,
                ],
                [
                    'lang_name'    => 'Objective-C',
                    'significance' => 10,
                ],
                [
                    'lang_name'    => 'PHP',
                    'significance' => 75,
                ],
                [
                    'lang_name'    => 'Python',
                    'significance' => 75,
                ],
                [
                    'lang_name'    => 'Ruby',
                    'significance' => 73,
                ],
                [
                    'lang_name'    => 'Scala',
                    'significance' => 92,
                ],
                [
                    'lang_name'    => 'Assembler',
                    'significance' => 0,
                ],
                [
                    'lang_name'    => 'Clojure',
                    'significance' => 100,
                ],
                [
                    'lang_name'    => 'Delphi',
                    'significance' => 0,
                ],
                [
                    'lang_name'    => 'Pascal',
                    'significance' => 13,
                ],
                [
                    'lang_name'    => 'F#',
                    'significance' => 87,
                ],
                [
                    'lang_name'    => 'Go',
                    'significance' => 94,
                ],
                [
                    'lang_name'    => 'Haskell',
                    'significance' => 95,
                ],
                [
                    'lang_name'    => 'Lua',
                    'significance' => 13,
                ],
                [
                    'lang_name'    => 'Perl',
                    'significance' => 70,
                ],
                [
                    'lang_name'    => 'Swift',
                    'significance' => 98,
                ],
                [
                    'lang_name'    => 'Visual Basic',
                    'significance' => 10,
                ],
            ],
            $functional
        );
    }

    private static function languagesOOP(bool $oop): array
    {
        return form(
            [
                [
                    'lang_name'    => 'C',
                    'significance' => 8,
                ],
                [
                    'lang_name'    => 'C++',
                    'significance' => 60,
                ],
                [
                    'lang_name'    => 'C#',
                    'significance' => 97,
                ],
                [
                    'lang_name'    => 'Java',
                    'significance' => 100,
                ],
                [
                    'lang_name'    => 'JavaScript',
                    'significance' => 60,
                ],
                [
                    'lang_name'    => 'TypeScript',
                    'significance' => 94,
                ],
                [
                    'lang_name'    => 'Objective-C',
                    'significance' => 83,
                ],
                [
                    'lang_name'    => 'PHP',
                    'significance' => 93,
                ],
                [
                    'lang_name'    => 'Python',
                    'significance' => 82,
                ],
                [
                    'lang_name'    => 'Ruby',
                    'significance' => 80,
                ],
                [
                    'lang_name'    => 'Scala',
                    'significance' => 82,
                ],
                [
                    'lang_name'    => 'Assembler',
                    'significance' => 0,
                ],
                [
                    'lang_name'    => 'Clojure',
                    'significance' => 7,
                ],
                [
                    'lang_name'    => 'Delphi',
                    'significance' => 15,
                ],
                [
                    'lang_name'    => 'Pascal',
                    'significance' => 0,
                ],
                [
                    'lang_name'    => 'F#',
                    'significance' => 87,
                ],
                [
                    'lang_name'    => 'Go',
                    'significance' => 50,
                ],
                [
                    'lang_name'    => 'Haskell',
                    'significance' => 24,
                ],
                [
                    'lang_name'    => 'Lua',
                    'significance' => 8,
                ],
                [
                    'lang_name'    => 'Perl',
                    'significance' => 70,
                ],
                [
                    'lang_name'    => 'Swift',
                    'significance' => 95,
                ],
                [
                    'lang_name'    => 'Visual Basic',
                    'significance' => 83,
                ],
            ],
            $oop
        );
    }

    private static function languagesForDesktopDev(bool $desktopDev): array
    {
        return form(
            [
                [
                    'lang_name'    => 'C',
                    'significance' => 50,
                ],
                [
                    'lang_name'    => 'C++',
                    'significance' => 90,
                ],
                [
                    'lang_name'    => 'C#',
                    'significance' => 100,
                ],
                [
                    'lang_name'    => 'Java',
                    'significance' => 95,
                ],
                [
                    'lang_name'    => 'JavaScript',
                    'significance' => 2,
                ],
                [
                    'lang_name'    => 'TypeScript',
                    'significance' => 2,
                ],
                [
                    'lang_name'    => 'Objective-C',
                    'significance' => 95,
                ],
                [
                    'lang_name'    => 'PHP',
                    'significance' => 30,
                ],
                [
                    'lang_name'    => 'Python',
                    'significance' => 80,
                ],
                [
                    'lang_name'    => 'Ruby',
                    'significance' => 20,
                ],
                [
                    'lang_name'    => 'Scala',
                    'significance' => 10,
                ],
                [
                    'lang_name'    => 'Assembler',
                    'significance' => 7,
                ],
                [
                    'lang_name'    => 'Clojure',
                    'significance' => 5,
                ],
                [
                    'lang_name'    => 'Delphi',
                    'significance' => 60,
                ],
                [
                    'lang_name'    => 'Pascal',
                    'significance' => 10,
                ],
                [
                    'lang_name'    => 'F#',
                    'significance' => 80,
                ],
                [
                    'lang_name'    => 'Go',
                    'significance' => 5,
                ],
                [
                    'lang_name'    => 'Haskell',
                    'significance' => 20,
                ],
                [
                    'lang_name'    => 'Lua',
                    'significance' => 20,
                ],
                [
                    'lang_name'    => 'Perl',
                    'significance' => 20,
                ],
                [
                    'lang_name'    => 'Swift',
                    'significance' => 100,
                ],
                [
                    'lang_name'    => 'Visual Basic',
                    'significance' => 60,
                ],
            ],
            $desktopDev
        );
    }

    private static function languagesForWebDev(bool $siteDev): array
    {
        return form(
            [
                [
                    'lang_name'    => 'C',
                    'significance' => 1,
                ],
                [
                    'lang_name'    => 'C++',
                    'significance' => 3,
                ],
                [
                    'lang_name'    => 'C#',
                    'significance' => 67,
                ],
                [
                    'lang_name'    => 'Java',
                    'significance' => 70,
                ],
                [
                    'lang_name'    => 'JavaScript',
                    'significance' => 100,
                ],
                [
                    'lang_name'    => 'TypeScript',
                    'significance' => 90,
                ],
                [
                    'lang_name'    => 'Objective-C',
                    'significance' => 3,
                ],
                [
                    'lang_name'    => 'PHP',
                    'significance' => 100,
                ],
                [
                    'lang_name'    => 'Python',
                    'significance' => 80,
                ],
                [
                    'lang_name'    => 'Ruby',
                    'significance' => 73,
                ],
                [
                    'lang_name'    => 'Scala',
                    'significance' => 69,
                ],
                [
                    'lang_name'    => 'Assembler',
                    'significance' => 1,
                ],
                [
                    'lang_name'    => 'Clojure',
                    'significance' => 4,
                ],
                [
                    'lang_name'    => 'Delphi',
                    'significance' => 3,
                ],
                [
                    'lang_name'    => 'Pascal',
                    'significance' => 1,
                ],
                [
                    'lang_name'    => 'F#',
                    'significance' => 15,
                ],
                [
                    'lang_name'    => 'Go',
                    'significance' => 60,
                ],
                [
                    'lang_name'    => 'Haskell',
                    'significance' => 53,
                ],
                [
                    'lang_name'    => 'Lua',
                    'significance' => 12,
                ],
                [
                    'lang_name'    => 'Perl',
                    'significance' => 60,
                ],
                [
                    'lang_name'    => 'Swift',
                    'significance' => 43,
                ],
                [
                    'lang_name'    => 'Visual Basic',
                    'significance' => 5,
                ],
            ],
            $siteDev
        );
    }

    private static function languagesWebFrontEnd(bool $front): array
    {
        return form(
            [
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
                    'significance' => 100,
                ],
                [
                    'lang_name'    => 'TypeScript',
                    'significance' => 150,
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
            ],
            $front,
        );
    }

    private static function languagesWebBackEnd(bool $back): array
    {
        return form(
            [
                [
                    'lang_name'    => 'C',
                    'significance' => 1,
                ],
                [
                    'lang_name'    => 'C++',
                    'significance' => 3,
                ],
                [
                    'lang_name'    => 'C#',
                    'significance' => 100,
                ],
                [
                    'lang_name'    => 'Java',
                    'significance' => 100,
                ],
                [
                    'lang_name'    => 'JavaScript',
                    'significance' => 100,
                ],
                [
                    'lang_name'    => 'TypeScript',
                    'significance' => 100,
                ],
                [
                    'lang_name'    => 'Objective-C',
                    'significance' => 3,
                ],
                [
                    'lang_name'    => 'PHP',
                    'significance' => 200,
                ],
                [
                    'lang_name'    => 'Python',
                    'significance' => 120,
                ],
                [
                    'lang_name'    => 'Ruby',
                    'significance' => 70,
                ],
                [
                    'lang_name'    => 'Scala',
                    'significance' => 90,
                ],
                [
                    'lang_name'    => 'Assembler',
                    'significance' => 1,
                ],
                [
                    'lang_name'    => 'Clojure',
                    'significance' => 4,
                ],
                [
                    'lang_name'    => 'Delphi',
                    'significance' => 3,
                ],
                [
                    'lang_name'    => 'Pascal',
                    'significance' => 1,
                ],
                [
                    'lang_name'    => 'F#',
                    'significance' => 15,
                ],
                [
                    'lang_name'    => 'Go',
                    'significance' => 60,
                ],
                [
                    'lang_name'    => 'Haskell',
                    'significance' => 50,
                ],
                [
                    'lang_name'    => 'Lua',
                    'significance' => 12,
                ],
                [
                    'lang_name'    => 'Perl',
                    'significance' => 60,
                ],
                [
                    'lang_name'    => 'Swift',
                    'significance' => 43,
                ],
                [
                    'lang_name'    => 'Visual Basic',
                    'significance' => 5,
                ],
            ],
            $back
        );
    }

    private static function languagesForMobileDev(bool $mobileDev): array
    {
        return form(
            [
                [
                    'lang_name'    => 'C',
                    'significance' => 0,
                ],
                [
                    'lang_name'    => 'C++',
                    'significance' => 60,
                ],
                [
                    'lang_name'    => 'C#',
                    'significance' => 55,
                ],
                [
                    'lang_name'    => 'Java',
                    'significance' => 100,
                ],
                [
                    'lang_name'    => 'JavaScript',
                    'significance' => 90,
                ],
                [
                    'lang_name'    => 'TypeScript',
                    'significance' => 93,
                ],
                [
                    'lang_name'    => 'Objective-C',
                    'significance' => 40,
                ],
                [
                    'lang_name'    => 'PHP',
                    'significance' => 70,
                ],
                [
                    'lang_name'    => 'Python',
                    'significance' => 100,
                ],
                [
                    'lang_name'    => 'Ruby',
                    'significance' => 85,
                ],
                [
                    'lang_name'    => 'Scala',
                    'significance' => 90,
                ],
                [
                    'lang_name'    => 'Assembler',
                    'significance' => 0,
                ],
                [
                    'lang_name'    => 'Clojure',
                    'significance' => 20,
                ],
                [
                    'lang_name'    => 'Delphi',
                    'significance' => 5,
                ],
                [
                    'lang_name'    => 'Pascal',
                    'significance' => 3,
                ],
                [
                    'lang_name'    => 'F#',
                    'significance' => 7,
                ],
                [
                    'lang_name'    => 'Go',
                    'significance' => 80,
                ],
                [
                    'lang_name'    => 'Haskell',
                    'significance' => 50,
                ],
                [
                    'lang_name'    => 'Lua',
                    'significance' => 2,
                ],
                [
                    'lang_name'    => 'Perl',
                    'significance' => 15,
                ],
                [
                    'lang_name'    => 'Swift',
                    'significance' => 95,
                ],
                [
                    'lang_name'    => 'Visual Basic',
                    'significance' => 5,
                ],
            ],
            $mobileDev
        );
    }

    private static function questions(): array
    {
        return [
            [
                'text'           => 'Це має бути популярна мова?',
                'significance'   => 100000,
                'answer_options' => [
                    [
                        'content' => 'Так',
                        'results' => self::languagesPopularity(true),
                    ],
                    [
                        'content' => 'Ні',
                        'results' => self::languagesPopularity(false),
                    ],
                    [
                        'content' => 'Не обов\'язково',
                        'results' => self::neutralAnswerSignificance(),
                    ],
                ]
            ],
            [
                'text'           => 'Програмісти на цій мові повинні отримувати високі зарплати?',
                'significance'   => 100000,
                'answer_options' => [
                    [
                        'content' => 'Так',
                        'results' => self::languagesSalary(true),
                    ],
                    [
                        'content' => 'Ні',
                        'results' => self::languagesSalary(false),
                    ],
                    [
                        'content' => 'Зарплата - не саме головне',
                        'results' => self::neutralAnswerSignificance(),
                    ],
                ]
            ],
            [
                'text'           => 'Мова повинна бути давно сформована і перевірена роками?',
                'significance'   => 100000,
                'answer_options' => [
                    [
                        'content' => 'Так',
                        'results' => self::languagesRecent(false)
                    ],
                    [
                        'content' => 'Ні',
                        'results' => self::languagesRecent(true)
                    ],
                    [
                        'content' => 'Це не є важливим',
                        'results' => self::neutralAnswerSignificance(),
                    ],
                ]
            ],
            [
                'text'           => 'Любите працювати з пам\'яттю комп\'ютера, з операціями процессора? ',
                'significance'   => 100000,
                'answer_options' => [
                    [
                        'content' => 'Так',
                        'results' => self::languagesLowLevel(true),
                    ],
                    [
                        'content' => 'Ні',
                        'results' => self::languagesLowLevel(false),
                    ],
                    [
                        'content' => 'Не знаю',
                        'results' => self::neutralAnswerSignificance(),
                    ],
                ]
            ],
            [
                'text'           => 'Мова повинна підтримувати функціональну парадигму?',
                'significance'   => 100000,
                'answer_options' => [
                    [
                        'content' => 'Так',
                        'results' => self::languagesFunctional(true)
                    ],
                    [
                        'content' => 'Ні',
                        'results' => self::languagesFunctional(false)
                    ],
                    [
                        'content' => 'Без різниці',
                        'results' => self::neutralAnswerSignificance(),
                    ],
                ]
            ],
            [
                'text'           => 'Мова повинна підтримувати об\'єктно-орієнтовану парадигму?',
                'significance'   => 100000,
                'answer_options' => [
                    [
                        'content' => 'Так',
                        'results' => self::languagesOOP(true)
                    ],
                    [
                        'content' => 'Ні',
                        'results' => self::languagesOOP(false)
                    ],
                    [
                        'content' => 'Без різниці',
                        'results' => self::neutralAnswerSignificance(),
                    ],
                ]
            ],
            [
                'text'           => 'Які додатки бажаєте створювати?',
                'significance'   => 150000,
                'answer_options' => [
                    [
                        'content' => 'Мобільні',
                        'results' => self::languagesForMobileDev(true),
                    ],
                    [
                        'content'             => 'Веб-додатки',
                        'results'             => self::languagesForWebDev(true),
                        'leadsToQuestionKeys' => [
                            'web_front',
                            'web_back',
                        ]
                    ],
                    [
                        'content' => 'Десктопні',
                        'results' => self::languagesForDesktopDev(true),
                    ],
                    [
                        'content' => 'Поки що не знаю',
                        'results' => self::neutralAnswerSignificance(),
                    ],
                ]
            ],
            'web_front' => [
                'text'           => 'Бажаєте працювати на Front End?',
                'significance'   => 150000,
                'answer_options' => [
                    [
                        'content' => 'Так',
                        'results' => self::languagesWebFrontEnd(true),
                    ],
                    [
                        'content' => 'Ні',
                        'results' => self::languagesWebFrontEnd(false),
                    ],
                    [
                        'content' => 'Поки що не знаю',
                        'results' => self::neutralAnswerSignificance(),
                    ],
                ]
            ],
            'web_back'  => [
                'text'           => 'Бажаєте працювати на Back End?',
                'significance'   => 150000,
                'answer_options' => [
                    [
                        'content' => 'Так',
                        'results' => self::languagesWebBackEnd(true),
                    ],
                    [
                        'content' => 'Ні',
                        'results' => self::languagesWebBackEnd(false),
                    ],
                    [
                        'content' => 'Поки що не знаю',
                        'results' => self::neutralAnswerSignificance(),
                    ],
                ]
            ],
        ];
    }

    public function run(): void
    {
        $test = Test::findOrFail(1);

        $questionsData = self::questions();
        foreach ($questionsData as $questionKey => $questionData) {
            if (!is_int($questionKey)) {
                continue;
            }

            $this->createQuestion($test, $questionData, $questionsData);
        }
    }

    private function createQuestion(Test $test, array $questionData, array &$questionsData): Question
    {
        $question = new Question();
        $question->text = $questionData['text'];
        $question->significance = $questionData['significance'];
        $question->test()->associate($test);
        $question->save();

        foreach ($questionData['answer_options'] as $optionData) {
            $option = new AnswerOption();
            $option->content = $optionData['content'];
            $option->question()->associate($question);
            $option->save();

            $dependentQuestions = array_map(
                fn($qKey) => $this->createQuestion(
                    $test,
                    $questionsData[$qKey],
                    $questionsData
                ),
                $optionData['leadsToQuestionKeys'] ?? []
            );

            $option->leadsToQuestion()->sync(Arr::pluck($dependentQuestions, 'id'));

            foreach ($optionData['results']['languages'] as $resultInfo) {
                $result = $this->findResultByName($resultInfo['lang_name']);
                $option->results()->attach(
                    [
                        $result->id => ['significance' => $resultInfo['significance']]
                    ]
                );
            }
        }

        return $question;
    }

    private function findResultByName(string $name)
    {
        static $storage = [];

        return $storage[$name]
            ?? ($storage[$name] = Result::whereLangName($name)->firstOrFail());
    }
}

function form(array $arr, bool $ver): array
{
    $max = array_reduce(
        $arr,
        static fn($max, $lang) => max($max, $lang['significance']),
        0
    );

    if ($ver) {
        return [
            'languages' => $arr,
            'max_rate'  => $max,
        ];
    }

    return [
        'languages' => array_map(
            static function (array $lang) use ($max) {
                $lang['significance'] = $max - $lang['significance'];
                return $lang;
            },
            $arr
        ),
        'max_rate'  => $max,
    ];
}

function cut(array $arr): array
{
    $min = array_reduce(
        $arr,
        static fn($max, $lang) => min($max, $lang['significance']),
        PHP_INT_MAX,
    );

    return array_map(
        static function (array $lang) use ($min) {
            $lang['significance'] -= $min;

            return $lang;
        },
        $arr
    );
}
