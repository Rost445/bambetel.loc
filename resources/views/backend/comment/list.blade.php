@extends('backend.layouts.app')
@section('style')
    <style>
        .table thead th,
        .table td {
            margin: auto !important;
            vertical-align: middle;
            text-align: start;

        }

        .table th,
        .table thead th {
            font-weight: bold !important;
        }
    </style>
@endsection

@section('content')
    <div class="page-breadcrumb mx-2">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">{{ $header_title }}</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('panel/dashboard') }}"> {{ auth()->user()->is_admin ? 'Адмін-панель' : 'Панель користувача' }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $header_title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @include('layouts._message')
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Користувач</th>
                                        <th>Відгук</th>
                                        <th>Відповіді</th>
                                        
                                        <th scope="col"><i class="mdi mdi-eye mr-2"></i>Редагувати</th>
                                        <th scope="col"><i class="mdi mdi-delete mr-2"></i>Видалити</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($comments->isEmpty())
                                        <tr>
                                            <td colspan="5" class="text-center">Записів не знайдено!</td>
                                            <!-- Змінено colspan="5" -->
                                        </tr>
                                    @else
                                        @foreach ($comments as $comment)
                                            <tr>
                                                <td>{{ $comment->user->name ?? 'Анонім' }}</td>
                                                <td>{{ $comment->comment }}</td>
                                                <td>
                                                    @foreach ($comment->getReply as $reply)
                                                        <p><strong>{{ $reply->user->name ?? 'Анонім' }}:</strong>
                                                            {{ $reply->comment }}</p>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <a class="text-danger" href="{{ route('assort_detail', ['slug' => $comment->assort->slug]) }}#{{ $comment->id }}"
                                                        target="_blank">
                                                        <i class="mdi mdi-eye mr-2"></i>Переглянути
                                                    </a>
                                                </td>
                                                <td>
                                                    <form id="delete-comment-{{ $comment->id }}"
                                                        action="{{ route('panel.comment.delete', $comment->id) }}"
                                                        method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>

                                                    <a class="text-primary" href="#"
                                                        onclick="event.preventDefault(); if(confirm('Видалити коментар?')) document.getElementById('delete-comment-{{ $comment->id }}').submit();">
                                                        <i class="mdi mdi-delete mr-2"></i>Видалити
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>


                            </table> <!-- ✅ Додаємо закриття table -->
                            <div class="float-lg-end">
                                {!! $comments->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.ReplyOpen').click(function(e) {
                e.preventDefault(); // предотвращает перезагрузку страницы при клике
                var id = $(this).attr('id');
                $('.ShowReply' + id).toggle();
            });
        });
    </script>
@endsection
