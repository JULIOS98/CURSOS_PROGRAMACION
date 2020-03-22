var app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue',
        sum: 1+5
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