<template>
    <div>
        <app-header></app-header>
        <main class="site-homepage" style="padding-top: 50px;">
            <transition name="slide-fade">
                <router-view></router-view>
            </transition>
        </main>
        <app-footer></app-footer>
    </div>
</template>

<script>
import AppHeader from './layouts/Header';
import AppFooter from './layouts/Footer';

export default {
    name: 'Index',
    components: {
        AppHeader,
        AppFooter
    },
}
</script>
<style scoped>
 @import '../../css/home.css'   
</style>