<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstPeterController extends Controller
{
    const BOOK_NAME = '1 Peter';
    const BIBLE_VERSE = 'King James Version';
    const CHAPTERS =5;

    public function index()
    {
        return view('index', [
            'book_name' => static::BOOK_NAME,
            'bible_verse' => static::BIBLE_VERSE,
            'number_of_chapters' => static:: CHAPTERS
        ]);
    }

    public function readByChapter($chapter_number)
    {
        return view('read-chapter', [
            'book_name' => static::BOOK_NAME,
            'bible_verse' => static::BIBLE_VERSE,
            'number_of_chapters' => static:: CHAPTERS,
            'chapter_number' => $chapter_number
        ]);
    }

    public function readAllChapters()
    {
        return view('all-chapters', [
            'book_name' => static::BOOK_NAME,
            'bible_verse' => static::BIBLE_VERSE,
            'number_of_chapters' => static:: CHAPTERS,
        ]);
    }
}
