<x-layout title="Libros">
    
    @foreach ($books as $book)
        <x-cardBook bookId="{{ $book->id }}" title="{{ $book->title }}" author="{{ $book->author }}" synopsis="{{ $book->synopsis }}" publicationYear="{{ $book->publication_year }}" />
    @endforeach
</x-layout>
