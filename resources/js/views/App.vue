<template>
 
    <div id="app" >
        <v-app-bar 
            app
            color="indigo"
            dark
            >
            <Header /> 
        </v-app-bar>
            <transition name="router-anim">
               <router-view> </router-view>
            </transition>
         <Footer />  

    </div>
    
</template>

<style >

.router-anim-enter-active,
.router-anim-leave-active {
  transition: transform .35s, opacity .28s ease-in-out;
}
.router-anim-enter {
    transform: scale(0.97);
  opacity: 0;
}

.router-anim-leave-to {
    transform: scale(1.03);
    opacity: 0;
}


</style>


<script>
import Header from '@/js/layouts/Navigation';
import Footer from '@/js/layouts/Footer';

export default {

    name: 'App',
    components: {
        Header,
        Footer
     }
};
</script>
    
