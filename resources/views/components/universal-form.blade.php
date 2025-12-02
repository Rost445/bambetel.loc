@push('styles')
<style>
      .modal {
    z-index: 9999 !important;
    position: fixed !important;
}
.modal-backdrop {
    z-index: 1050 !important;
}   
 .send-btn {
            color: rgb(255, 255, 255);
            background: #fb8429;
            border: 0;
            padding: 10px 30px;
            transition: 0.4s;
            border-radius: 50px;
        }

        .send-btn:hover {
            color: rgb(255, 255, 255);
            background: #dd7423;
            border: 0;
            padding: 10px 30px;
            transition: 0.4s;
            border-radius: 50px;
        }

        .send-btn:active {
            color: rgb(255, 255, 255);
            background: #fab179;
            border: 0;
            padding: 10px 30px;
            transition: 0.4s;
            border-radius: 50px;
        }
        #captcha{
            width: 60%;
        }
    </style>
@endpush
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
        <button type="submit" class="send-btn" id="submitBtn">Відправити</button>
    </div>
</form>

<!-- Modal -->
<div class="modal fade" id="thankYouModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h5>Дякуємо! Ваша заявка надіслана.</h5>
                <button class="btn btn-primary mt-3" data-bs-dismiss="modal">Закрити</button>
            </div>
        </div>
    </div>
</div>

@push('script')
<script>
$(document).ready(function () {
    $('#phone').mask('+380(00)000-00-00');

    $('#universalForm').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: $(this).serialize(),
            success: function(res) {
                if (res.success) {
                    $('#universalForm')[0].reset();
                    new bootstrap.Modal(document.getElementById('thankYouModal')).show();
                } else {
                    alert(res.message);
                }
            },
            error: function() {
                alert('Помилка при відправці.');
            }
        });
    });
});
</script>
@endpush




