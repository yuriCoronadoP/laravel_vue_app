<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <router-link :to='{name:"crearLibro"}' class="btn btn-success"><i class="fas fa-plus"></i> Nuevo libro</router-link>
            </div>

            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Id</th>
                                <th>autor</th>
                                <th>titulo</th>
                                <th>edicion</th>
                                <th>datos de publicacion</th>
                                <th>tipo de contenido</th>
                                <th>reestricciones</th>
                                <th>materia</th>
                                <th>proveedor</th>
                                <th>acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="libro in libros" :key="libro.id">
                                <td>{{ libro.id }}</td>
                                <td>{{ libro.autor }}</td>
                                <td>{{ libro.titulo }}</td>
                                <td>{{ libro.edicion }}</td>
                                <td>{{ libro.datos_publicacion }}</td>
                                <td>{{ libro.tipo_contenido }}</td>
                                <td>{{ libro.reestricciones }}</td>
                                <td>{{ libro.materia }}</td>
                                <td>{{ libro.proveedor }}</td>
                                <td>
                                    <router-link :to='{name:"editarLibro", params:{id:libro.id}}' class="btn btn-info"><i class="fas fa-edit"></i></router-link>
                                    <a type="button" @click="borrarLibro(libro.id)" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
    </div>   
</template>

<script>


    export default{
        name: "libros",
        data(){
            return{
                libros:[]
            }
        },
        mounted(){
            this.mostrarLibros()
        },
        methods:{
            async mostrarLibros(){
                await this.axios.get('/api/libro')
                .then(response =>{
                    this.libros = response.data
                })
                .catch(error =>{
                    this.libros = []
                })
            },
            borrarLibro(id){
                if(confirm('Confirma eliminar registro?')){
                    this.axios.delete(`/api/libro/${id}`)
                    .then(response =>{
                        this.mostrarLibros()
                    })
                    .catch(error =>{
                        console.log(error)
                    })
                }
            }
        }
    }
</script>