<x-layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>

    <form method="POST" action="/login">
        @csrf

        <div class="space-y-12 pe-8">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="sm:col-span-4">
                    <x-form-label for="email">Email</x-form-label>
                    <div class="mt-2">
                        <x-form-input name="email" id="email" type="email" required />
                        <x-form-error name="email" />
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <x-form-label for="passwrod">Password</x-form-label>
                    <div class="mt-2">
                        <x-form-input name="passwrod" id="passwrod" type="passwrod" required />
                        <x-form-error name="passwrod" />
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6 px-8">
            <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button>Register</x-form-button>
        </div>
    </form>

</x-layout>
