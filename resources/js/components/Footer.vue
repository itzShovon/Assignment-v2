<template>
    <footer class="footer mt-auto">
        <div class="copyright bg-white">
            <p>
                &copy; <span id="copy-year">2020</span> Copyright
                {{ app_subtitle }} by
                <a class="text-primary" href="#" target="_blank">Shovon</a>.
            </p>
        </div>
    </footer>
</template>

<script>
export default {
    data () {
        return {
            app_subtitle : process.env.MIX_APP_SUBTITLE,
        }
    },
    mounted() {
    }
};
</script>
