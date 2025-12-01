<div>
    <form class="universal-form" data-form-name="{{ $form_name }}" data-admin-email="{{ $admin_email }}">
        @csrf
        @foreach($fields as $field)
            <div class="mb-3">
                @if($field['type'] === 'text' || $field['type'] === 'email' || $field['type'] === 'tel' || $field['type'] === 'date' || $field['type'] === 'time')
                    <input type="{{ $field['type'] }}"
                           name="{{ $field['name'] }}"
                           placeholder="{{ $field['placeholder'] ?? '' }}"
                           class="form-control {{ $field['class'] ?? '' }}"
                           @if(!empty($field['required'])) required @endif>
                @elseif($field['type'] === 'textarea')
                    <textarea name="{{ $field['name'] }}" placeholder="{{ $field['placeholder'] ?? '' }}" class="form-control" rows="3"></textarea>
                @elseif($field['type'] === 'select')
                    <select name="{{ $field['name'] }}" class="form-control" @if(!empty($field['required'])) required @endif>
                        <option value="">{{ $field['placeholder'] ?? 'Select' }}</option>
                        @foreach($field['options'] as $option)
                            <option value="{{ $option }}">{{ $option }}</option>
                        @endforeach
                    </select>
                @endif
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary w-100">Відправити</button>
        <div class="loading d-none">Loading...</div>
        <div class="error-message text-danger mt-2"></div>
        <div class="sent-message text-success mt-2 d-none">Ваше повідомлення відправлено!</div>
    </form>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/cleave.js@1/dist/cleave.min.js"></script>
<script>
document.querySelectorAll('.universal-form').forEach(form => {
    // Маска для телефону
    form.querySelectorAll('input[type="tel"]').forEach(input => {
        new Cleave(input, { phone: true, phoneRegionCode: 'UA' });
    });

    form.addEventListener('submit', function(e){
        e.preventDefault();
        const submitBtn = form.querySelector('button[type="submit"]');
        const loading = form.querySelector('.loading');
        const errorDiv = form.querySelector('.error-message');
        const successDiv = form.querySelector('.sent-message');

        submitBtn.disabled = true;
        loading.classList.remove('d-none');
        errorDiv.textContent = '';
        successDiv.classList.add('d-none');

        let formData = new FormData(form);
        formData.append('form_name', form.dataset.formName);
        if(form.dataset.adminEmail) {
            formData.append('admin_email', form.dataset.adminEmail);
        }

        fetch("{{ route('forms.submit') }}", {
            method: 'POST',
            headers: {'X-Requested-With':'XMLHttpRequest'},
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            submitBtn.disabled = false;
            loading.classList.add('d-none');
            if(data.success) {
                form.reset();
                successDiv.classList.remove('d-none');
            } else {
                errorDiv.textContent = data.message || 'Помилка відправки!';
            }
        })
        .catch(err => {
            submitBtn.disabled = false;
            loading.classList.add('d-none');
            errorDiv.textContent = 'Помилка. Перевірте консоль.';
            console.error(err);
        });
    });
});
</script>
@endpush
