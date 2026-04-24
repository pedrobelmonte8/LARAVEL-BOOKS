@props(['bookId','title','author','synopsis','publicationYear'])

<div class="card bg-base-100 w-96 shadow-sm">
  <div class="card-body">
    <h2 class="card-title">{{ $title }}</h2>
    <p>{{ $synopsis }}</p>
    <p><strong>Autor:</strong> {{ $author }}</p>
    <p><strong>Año de publicación:</strong> {{ $publicationYear }}</p>
    <div class="card-actions justify-end">
      <a href="/books/{{ $bookId }}" class="btn btn-primary">Ver detalles</a>
    </div>
  </div>
</div>