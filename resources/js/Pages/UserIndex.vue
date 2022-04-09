<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import ButtonLink from '@/Components/ButtonLink';
import { Head } from '@inertiajs/inertia-vue3';

export default {
    props: {
        users: Array,
        canCreate: Boolean,
    },
    components: {
        BreezeAuthenticatedLayout,
        ButtonLink,
        Head,
    }
}
</script>

<template>
    <Head title="Usuarios" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Usuários
                <ButtonLink v-if="canCreate" class="ml-4" :href="route('user.create')">Adicionar usuário</ButtonLink>
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <ul>
                            <li v-for="(user, key) in users" :key="key">
                                {{ user.name }} {{ user.email }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
