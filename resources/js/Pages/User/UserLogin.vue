<template>
    <body class="h-screen font-sans login bg-cover">
       
    <div class="container mx-auto h-full flex flex-1 justify-center items-center">
        <div class="w-full max-w-lg">
            <div class="leading-loose">
                <form class="max-w-xl m-4 p-10 bg-gray-200 rounded shadow-xl" @submit.prevent="submit">
                    <p class="text-gray-800 font-medium text-center text-lg font-bold">USER</p>
                     <BreezeValidationErrors class="mb-4" />
                     {{ $page.props.flash.message }}
                    <div class="">
                        <label class="block text-sm text-gray-00" for="username">Email</label>
                        <input v-model="form.email" class="w-full px-5 py-1 text-gray-700  rounded" id="username" name="username" type="text" required="" placeholder="Email" aria-label="username">
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="password">Şifre</label>
                        <input v-model="form.password" class="w-full px-5  py-1 text-gray-700  rounded" id="password" name="password" type="password" required="" placeholder="*******" aria-label="password">
                    </div>
                    <div class="mt-4 flex justify-end">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Giriş</button>

                    </div>

                </form>

            </div>
        </div>
    </div>
    </body>
</template>

<script>
import { Inertia } from '@inertiajs/inertia';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';

export default ({
    components: {
        BreezeValidationErrors,
    },
    data() {
        return {
            form: this.$inertia.form({
                email: '',
                password: '',
                remember: false,
                messages: '',

            })
        }
    },
    methods:{
        submit() {
            this.form.post(this.route('login'), {
                onFinish: () => this.form.reset('password'),
            })
        }

    }
})
</script>