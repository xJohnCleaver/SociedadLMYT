const { Schema, model } = require('mongoose');
// permite definir los datos a guardar en mongodb, sus propiedades
const ArquetipoSchema = new Schema({
    title: String,
    description: String,
    imageURL: String
})

// crea una tabla arquetipo con la estructura anterior
module.exports = model('Arquetipo', ArquetipoSchema);