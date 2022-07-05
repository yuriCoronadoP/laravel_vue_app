<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Editar Libro</h4></div>
                <div class="card-body">
                    <form @submit.prevent="actualizar">
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
</template>

<script>
export default {
    name:"editar-libro",
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
    mounted(){
        this.mostrarLibro()
    },
    methods:{
        async mostrarLibro(){
            await this.axios.get(`/api/libro/${this.$route.params.id}`).then(response=>{
                const {autor, titulo, edicion, datos_publicacion, tipo_contenido, reestricciones, materia, proveedor} = response.data
                this.libro.autor = autor
                this.libro.titulo = titulo
                this.libro.edicion = edicion
                this.libro.datos_publicacion = datos_publicacion
                this.libro.tipo_contenido = tipo_contenido
                this.libro.reestricciones = reestricciones
                this.libro.materia = materia
                this.libro.proveedor = proveedor
            }).catch(error=>{
                console.log(error)
            })
        },
        async actualizar(){
            await this.axios.put(`/api/libro/${this.$route.params.id}`,this.libro)
            .then(response=>{
                this.$router.push({name:"mostrarLibros"})
            })
            .catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>