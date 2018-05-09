<template>
<div>
<tool-bar></tool-bar>
<router-view></router-view>
<app-footer></app-footer>
</div>
</template>


<script>
import Toolbar from './Toolbar.vue';
import AppFooter from './AppFooter.vue';
export default{
    components:{
         'tool-bar':Toolbar,
         'app-footer':AppFooter
    }

}

</script>