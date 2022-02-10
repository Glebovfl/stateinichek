<template>
    <div class="container">
        hello world
    </div>
</template>

<script>
export default {
    name: "App.vue",
    data() {
        return {
            date: new Date(),
            rf: "РФ?",
            rff: "РФ?",
        }
    },
    methods: {
        clearDateTime() {
            this.date = null
        },
    },
}
</script>

<style scoped>

</style>
