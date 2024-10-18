<script setup>
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import AuthenticationCard from "@/Components/AuthenticationCard.vue";
import AuthenticationCardLogo from "@/Components/AuthenticationCardLogo.vue";
import Checkbox from "@/Components/Checkbox.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";

defineProps({
  canResetPassword: Boolean,
});

const form = useForm({
  email: "",
  password: "",
  remember: false,
  service: route().params.s,
});

const submit = () => {
  form
    .transform((data) => ({
      ...data,
      remember: form.remember ? "on" : "",
    }))
    .post(route("login"), {
      onFinish: () => form.reset("password"),
    });
};
</script>

<template>
  <Head title="Log in" />

  <AuthenticationCard>
    <template #logo>
      <AuthenticationCardLogo />
    </template>
    <form @submit.prevent="submit" class="space-y-6">
      <div>
        <TextInput v-model="form.service" hidden />
        <InputLabel for="email" :value="$t('email')" />
        <TextInput
          id="email"
          v-model="form.email"
          type="email"
          class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
          required
          autofocus
        />
        <InputError class="mt-2" :message="form.errors.email" />
      </div>

      <div>
        <InputLabel for="password" :value="$t('password')" />
        <TextInput
          id="password"
          v-model="form.password"
          type="password"
          class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
          required
          autocomplete="current-password"
        />
        <InputError class="mt-2" :message="form.errors.password" />
      </div>

      <div class="flex items-center justify-between">
        <label class="flex items-center">
          <Checkbox v-model:checked="form.remember" name="remember" />
          <span class="ml-2 text-sm text-gray-600">{{ $t("remember_me") }}</span>
        </label>
        <Link
          v-if="canResetPassword"
          :href="route('password.request')"
          class="text-sm text-blue-600 hover:text-blue-900"
        >
          {{ $t("forgot_your_password") }}
        </Link>
      </div>

      <div class="flex items-center justify-end mt-4">
        <Link
          :href="route('registration')"
          class="underline text-sm text-gray-600 hover:text-gray-900 mr-4"
        >
          {{ $t("register") }}
        </Link>
        <PrimaryButton
          class="ml-4 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
          :class="{ 'opacity-25': form.processing }"
          :disabled="form.processing"
        >
          {{ $t("login") }}
        </PrimaryButton>
      </div>
    </form>
  </AuthenticationCard>
</template>
