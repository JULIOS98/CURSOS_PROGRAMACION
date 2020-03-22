var app = new Vue({
    el: '#app',
    data: {
        texto: "",
        text: "Descripcion",
    },

    computed: {
        // a computed getter
        reversedMessage: function () {
          // `this` points to the vm instance
          return this.message.split('').reverse().join('')
        }
    },
    methods: {
        calcularSuma(num1, num2){
            return num1 + num2;
        }
    },
});