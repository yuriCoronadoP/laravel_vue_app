<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-body">
                    <div class="card-header"><h5 class="card-title">Agregar Libro</h5></div>
                    <div class="card-body">
                        <form @submit.prevent="crear">

                            <div class="row">
                                <div class="col-12 mb-2">
                                    <div class="form-group">
                                        <label for="">Autor</label>
                                        <input type="text" class="form-control" v-model="libro.autor">
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="form-group">
                                        <label for="">Titulo</label>
                                        <input type="text" class="form-control" v-model="libro.titulo">
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="form-group">
                                        <label for="">Edicion</label>
                                        <input type="text" class="form-control" v-model="libro.edicion">
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="form-group">
                                        <label for="">Datos de publicacion</label>
                                        <input type="text" class="form-control" v-model="libro.datos_publicacion">
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="form-group">
                                        <label for="">Tipo de contenido</label>
                                        <input type="text" class="form-control" v-model="libro.tipo_contenido">
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="form-group">
                                        <label for="">Restricciones</label>
                                        <input type="text" class="form-control" v-model="libro.reestricciones">
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="form-group">
                                        <label for="">Materia</label>
                                        <input type="text" class="form-control" v-model="libro.materia">
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="form-group">
                                        <label for="">Proveedor</label>
                                        <input type="text" class="form-control" v-model="libro.proveedor">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn-primary">Guardar</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    
</template>
<script>
export default {
     name: "crear-libro",
     data(){
        return{
            libro:{
                autor:"",
                titulo:"",
                edicion:"",
                datos_publicacion:"",
                tipo_contenido:"",
                reestricciones:"",
                materia:"",
                proveedor:""
            }
        }
     },
     methods:{
        async crear(){
            await this.axios.post('/api/libro',this.libro)
            .then(response => {
                this.$router.push({name:"mostrarLibros"})
            })
            .catch(error => {
                console.log(error)
            })
        }
     }
}
</script>