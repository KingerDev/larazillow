<template>
    <form @submit.prevent="login">
        <div class="w-1/2 mx-auto mt-5">
            <div>
                <label for="email" class="label">Email</label>
                <input type="text" id="email" class="input" v-model="form.email">
                <div v-if="form.errors.email" class="input-error">{{ form.errors.email }}</div>
            </div>
            <div class="mt-3">
                <label for="password" class="label">Password</label>
                <input type="password" id="password" class="input" v-model="form.password">
                <div v-if="form.errors.password" class="input-error">{{ form.errors.password }}</div>
            </div>
            <div class="mt-4">
                <button class="btn-primary w-full">Login</button>

                <div class="mt-2 text-center">
                    <Link :href="route('user-account.create')" class="text-sm text-gray-500">Create an account</Link>
                </div>
            </div>
        </div>
    </form>
</template>

<script setup>
import {router, useForm, Link} from "@inertiajs/vue3";

const form = useForm({
    email: null,
    password: null,
})

const login = () => form.post(route('login.store'))
</script>
