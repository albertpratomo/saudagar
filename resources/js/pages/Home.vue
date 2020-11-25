<template>
    <div>
        <h1>Home</h1>

        {{ page }}
    </div>
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
