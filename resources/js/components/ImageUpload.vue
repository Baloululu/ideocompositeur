<style lang="scss">

    input[type="file"]{
        position: absolute;
        top: -500px;
    }

    .files-container{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        margin: 0 -5px;
    }

    .preview{
        width: 200px;
        margin: 5px;

        img, canvas
        {
            width: 100%;
        }

        button:hover
        {
            background-color: transparent !important;
        }
    }
</style>

<template>
    <div>
        <div>
            <label for="files">Files</label>
            <input type="file" id="files" ref="files" accept="image/*" multiple v-on:change="handleFilesUpload()"/>
        </div>
        <div class="files-container">
            <div v-for="(file, key) in files" class="preview w3-display-container">
                <img v-bind:ref="'image'+parseInt( key )"/>
                <button class="w3-display-bottomright w3-button w3-text-pale-red w3-hover-text-red" v-on:click.prevent="removeFile( key )"><i class="fas fa-trash-alt"></i></button>
            </div>
        </div>

        <button v-on:click.prevent="addFiles()">Add Files</button>
        <button v-on:click.prevent="submitFiles()">Submit</button>
    </div>
</template>

<script>

    import axios from "axios";

    export default {
        data(){
            return {
                files: []
            }
        },

        methods: {
            addFiles(){
                this.$refs.files.click();
            },

            removeFile( key ){
                this.files.splice( key, 1 );
                this.getImagePreviews();
            },

            submitFiles(){
                let formData = new FormData();

                for( var i = 0; i < this.files.length; i++ ){
                    let file = this.files[i];

                    formData.append('files[' + i + ']', file);
                }

                axios
                    .post( '/file-multiple-preview',
                        formData,
                        {
                            headers: {
                                'Content-Type': 'multipart/form-data'
                            }
                        }
                    )
                    .then(function(){
                        console.log('SUCCESS!!');
                    })
                    .catch(function(){
                        console.log('FAILURE!!');
                    });
            },

            handleFilesUpload(){
                let uploadedFiles = this.$refs.files.files;

                for( var i = 0; i < uploadedFiles.length; i++ ){
                    this.files.push( uploadedFiles[i] );
                }

                this.getImagePreviews();
            },

            getImagePreviews(){
                for( let i = 0; i < this.files.length; i++ ){
                    if ( /\.(jpe?g|png|gif)$/i.test( this.files[i].name ) ) {
                        let reader = new FileReader();

                        reader.onloadend = function(e){

                            let img = new Image();

                            img.onload = function()
                            {
                                let MAXWidthHeight=1920;
                                let r=MAXWidthHeight/Math.max(img.width,img.height),
                                    w=Math.round(img.width*r),
                                    h=Math.round(img.height*r),
                                    c=document.createElement("canvas");
                                c.width=w;c.height=h;
                                c.getContext("2d").drawImage(img,0,0,w,h);

                                this.$refs['image'+parseInt( i )][0].src = c.toDataURL("image/jpeg");
                            }.bind(this);

                            img.src = e.target.result;

                        }.bind(this);

                        reader.readAsDataURL( this.files[i] );
                    }
                }
            }
        }
    }
</script>