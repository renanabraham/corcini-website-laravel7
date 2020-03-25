
exports.up = function(knex) {
    return knex.schema.createTable('incidents', function (table) {
        //Auto increment
        table.increments();

        table.string('title').notNullable();
        table.string('description').notNullable();
        table.decimal('value').notNullable();

        //faz o relacionamento com a tabela ONGS
        table.string('ong_id').notNullable();

        //Criação da chave estrangeira
        table.foreign('ong_id').references('id').inTable('ongs');
    });
};

exports.down = function(knex) {
  return knex.schema.dropTable('incidents');
};
