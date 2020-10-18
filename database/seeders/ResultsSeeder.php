<?php

namespace Database\Seeders;

use App\Models\Result;
use Illuminate\Database\Seeder;

class ResultsSeeder extends Seeder
{
    private static function languagesList(): array
    {
        return [
            ['lang_name' => 'C'],
            ['lang_name' => 'C++'],
            ['lang_name' => 'C#'],
            ['lang_name' => 'Java'],
            ['lang_name' => 'JavaScript'],
            ['lang_name' => 'TypeScript'],
            ['lang_name' => 'Objective-C'],
            ['lang_name' => 'PHP'],
            ['lang_name' => 'Python'],
            ['lang_name' => 'Ruby'],
            ['lang_name' => 'Scala'],
            ['lang_name' => 'Assembler'],
            ['lang_name' => 'Clojure'],
            ['lang_name' => 'Delphi'],
            ['lang_name' => 'Pascal'],
            ['lang_name' => 'F#'],
            ['lang_name' => 'Go'],
            ['lang_name' => 'Haskell'],
            ['lang_name' => 'Lua'],
            ['lang_name' => 'Perl'],
            ['lang_name' => 'Swift'],
            ['lang_name' => 'Visual Basic'],
        ];
    }

    public function run(): void
    {
        foreach (self::languagesList() as $lang) {
            Result::create($lang);
        }
    }
}

/*



'C',
'C++',
'C#',
'Java',
'JavaScript',
'TypeScript',
'Objective-C',
'PHP',
'Python',
'Ruby',
'Scala',
'Assembler',
'Clojure',
'Delphi',
'Pascal',
'F#',
'Go',
'Haskell',
'Lua',
'Perl',
'Swift',
'Visual Basic',



 */
