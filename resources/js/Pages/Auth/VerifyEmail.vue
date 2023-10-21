<template>
    <h1>You need to verify your email to access this page</h1>
    <div>
        <Link :href="route('verification.send')" as="button" method="post" class="text-indigo-600 dark:text-indigo-400">
            Resend verification email
        </Link>
    </div>
</template>

<script setup>
import {Link} from "@inertiajs/vue3";
</script>
