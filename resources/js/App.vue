<template>
    <main>
        <div class="wrapper" id="wrapper">
            <Sidebar />

            <div class="page-wrapper">
                <Header />

                <router-view></router-view>

                <Footer />
            </div>
        </div>
    </main>
</template>

<script>
import Header from "./components/Header.vue";
import Sidebar from "./components/Sidebar.vue";
import Footer from "./components/Footer.vue";

export default {
    components: {
        Header,
        Sidebar,
        Footer
    }
};
</script>
