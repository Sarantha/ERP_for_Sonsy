<template>
    
</template>
<script>
export default {
    data(){
        return{
            customers : {},
            form: new Form({
                CustomerID : '',
                Fname: '',
                Lname: '',
                No: '',
                City: '',
                Street: '',
                NicNo:''
            }),
        }
    },
    methods:{
        loadCustomer(){
            axios.get("api/customer").then(({ data }) => this.customers = data.data);
        }
    },
    created(){
        this.loadCustomer();
    }
}
</script>
<style>

</style>


