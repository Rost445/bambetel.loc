@push('styles')
<style>


     .modal {
    z-index: 9999 !important;
    position: fixed !important;
}

.modal-backdrop {
    z-index: 9000 !important;
}

    .send-btn {
            background: linear-gradient(45deg, var(--accent-color),
                    color-mix(in srgb, var(--accent-color), blue 15%));
            color: var(--contrast-color);
            border: none;
            padding: 1rem 2rem;
            font-weight: 600;
            font-size: 1.1rem;
            border-radius: 8px;
            margin-top: 1.5rem;
            transition: all 0.3s ease;
        }

        .send-btn:hover {
            background: linear-gradient(45deg, var(--accent-color),
                    color-mix(in srgb, var(--accent-color), blue 15%));
            color: var(--contrast-color);
            border: none;
            padding: 1rem 2rem;
            font-weight: 600;
            font-size: 1.1rem;
            border-radius: 8px;
            margin-top: 1.5rem;
            transition: all 0.3s ease;
        }

        .send-btn:active {
            background: linear-gradient(45deg, var(--accent-color),
                    color-mix(in srgb, var(--accent-color), blue 15%));
            color: var(--contrast-color);
            border: none;
            padding: 1rem 2rem;
            font-weight: 600;
            font-size: 1.1rem;
            border-radius: 8px;
            margin-top: 1.5rem;
            transition: all 0.3s ease;
        }
        #captcha{
            width: 60%;
        }
    </style>
@endpush
<div id="message-container">
    @include('layouts._message')
</div>

<form id="universalForm" action="{{ route('form.universal.submit') }}" method="POST" novalidate>
    @csrf

    <div class="mb-3">
        <input type="text" name="name" class="form-control" placeholder="Ваше Ім’я" required>
    </div>

    <div class="mb-3">
        <input type="text" name="phone" id="phone" class="form-control" placeholder="+380(XX)XXX-XX-XX" required>
    </div>

    <div class="mb-3">
        <input type="email" name="email" class="form-control" placeholder="Email (необов’язково)">
    </div>

    @php
        $a = rand(1, 9);
        $b = rand(1, 9);
        session(['captcha_sum' => $a + $b]);
    @endphp

    <div class="mb-3">
        <div class="d-flex align-items-center gap-2">
            <input type="text" name="captcha" class="form-control" placeholder="Сума" required style="max-width: 120px;">
            <span>{{ $a }} + {{ $b }} = ?</span>
        </div>
    </div>

    <div class="text-center">
        <button type="submit" class="btn send-btn" id="submitBtn"><i class="bi bi-calendar-check me-2"></i>Забронювати</button>
    </div>
</form>

<!-- Modal -->
<div class="modal fade" id="thankYouModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h5 class="text-success">Дякуємо! Ваша заявка надіслана.</h5>
                <button class="btn btn-primary mt-3" data-bs-dismiss="modal">Закрити</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function () {
        $('#phone').mask('+380(00)000-00-00');

        // Налаштування CSRF для всіх AJAX-запитів
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#universalForm').on('submit', function (e) {
            e.preventDefault(); // Зупиняємо стандартну відправку форми

$.ajax({
    url: $(this).attr('action'),
    type: 'POST',
    data: $(this).serialize(),
    success: function (response) {
        // очищаємо попередні повідомлення
        $('#message-container').html('');

        if (response.success) {
            $('#universalForm')[0].reset();
            $('#message-container').html(
                '<div class="alert alert-success alert-dismissible fade show" role="alert">' +
                response.message +
                '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>' +
                '</div>'
            );
        } else {
            let errorsHtml = '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
            
            if (response.errors) {
                $.each(response.errors, function (key, messages) {
                    messages.forEach(function (msg) {
                        errorsHtml += '<div>' + msg + '</div>';
                    });
                });
            } else if (response.message) {
                errorsHtml += response.message;
            }

            errorsHtml += '<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
            $('#message-container').html(errorsHtml);
        }
    },
    error: function () {
        $('#message-container').html(
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">' +
            'Помилка при відправці. Спробуйте ще раз.' +
            '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>' +
            '</div>'
        );
    }
});



        });
   

    });
</script>
@endpush




