<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Telefone -->
        <div>
            <x-input-label for="telefone" :value="__('Telefone')" />
            <x-text-input id="telefone" class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone')"
                required autofocus autocomplete="telefone" />
            <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirme a senha')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="Nova-Senha" />

            <x-input-error :messages="$errors->get('Confirme a senha')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Já é Cadastrado?') }}
            </a>
            <!-- Adiciona a lib (no final do body) -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.8/inputmask.min.js"></script>

            <x-primary-button class="ms-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>

    </form>
    
</x-guest-layout>

<script>
      function maskBRPhone(v){
        v = (v || '').replace(/\D/g, '').slice(0, 11);
        if (v.length > 10) return v.replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3');
        if (v.length > 6)  return v.replace(/^(\d{2})(\d{4})(\d{0,4}).*/, '($1) $2-$3');
        if (v.length > 2)  return v.replace(/^(\d{2})(\d{0,5}).*/, '($1) $2');
        return v.replace(/^(\d*)/, '($1');
      }
 
      function initPhoneMask() {
        const tel = document.getElementById('telefone');
        if (!tel) return;
        tel.setAttribute('inputmode', 'numeric');
        tel.addEventListener('input', (e) => { e.target.value = maskBRPhone(e.target.value); });
      }
 
      document.addEventListener('DOMContentLoaded', initPhoneMask);
      document.addEventListener('turbo:load', initPhoneMask);      // se usar Turbo
      document.addEventListener('livewire:navigated', initPhoneMask); // se usar Livewire v3
      document.addEventListener('inertia:finish', initPhoneMask);  // se usar Inertia
</script>