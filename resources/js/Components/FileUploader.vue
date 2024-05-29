<template>
    file uploader component
    <a-upload
      name="file"
      :multiple="false"
      :beforeUpload="beforeUpload"
      :showUploadList="false"
    >
      <template v-if="previewImage">
        <img :src="previewImage" alt="Preview" style="max-width: 200px" />
      </template>
      <template v-else>
        <a-button>
          <upload-outlined></upload-outlined>
          Click to Upload
        </a-button>
      </template>
    </a-upload>
  </template>
  
  <script>
  import { message } from 'ant-design-vue'
  import { UploadOutlined } from '@ant-design/icons-vue'
  
  export default {
    name: 'FileUploader',
    components: {
      UploadOutlined
    },
    props: {
      dataField: {
        type: String,
        required: true
      },
      acceptedFileTypes: {
        type: Array,
        required: true
      },
      maxFileSize: {
        type: Number,
        required: true
      }
    },
    data() {
      return {
        [this.dataField]: null,
        previewImage: null
      }
    },
    methods: {
      async beforeUpload(file) {
        const isAcceptedType = this.isAcceptedFileType(file)
        if (!isAcceptedType) {
          message.error(`The file type "${file.type}" is not accepted.`)
          return false
        }
  
        // const isWithinMaxSize = this.isWithinMaxSize(file)
        // if (!isWithinMaxSize) {
        //   message.error(`The file size exceeds the maximum of ${this.maxFileSize} bytes.`)
        //   return false
        // }
  
        const isImageFile = file.type.includes('image')
        if (isImageFile) {
          const resizedFile = await this.resizeImage(file)
          this.previewImage = URL.createObjectURL(resizedFile)
          this[this.dataField] = resizedFile
          return resizedFile
        }
  
        this[this.dataField] = file
        return true



      },
      isAcceptedFileType(file) {
        return this.acceptedFileTypes.includes(file.type)
      },
      isWithinMaxSize(file) {
        return file.size <= this.maxFileSize
      },
      resizeImage(file){
      console.log(file)
      return new Promise((resolve, reject) => {
        const maxSize = 2 * 1024 * 1024 // 2MB
        if (file.size > maxSize) {
          const canvas = document.createElement('canvas')
          const context = canvas.getContext('2d')
          const img = new Image()
          img.src = URL.createObjectURL(file)

          img.onload = () => {
            let width = img.width
            let height = img.height

            if (width > height) {
              if (width > 1024) {
                height *= 1024 / width
                width = 1024
              }
            } else {
              if (height > 1024) {
                width *= 1024 / height
                height = 1024
              }
            }

            canvas.width = width
            canvas.height = height
            context.drawImage(img, 0, 0, width, height)

            canvas.toBlob(
              (blob) => {
                resolve(blob)
              },
              file.type,
              0.9
            )
          }
        } else {
          resolve(file)
        }
      })
    },
    }
  }
  </script>