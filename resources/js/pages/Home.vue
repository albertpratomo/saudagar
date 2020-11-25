<template>
    <h1>This is Vue 3!</h1>

    {{ page }}
</template>

<script>
export default {
    name: 'PageHome',
    props: {
        page: {
            type: Object,
            required: true,
        },
    },
};
</script>
