<!-- <?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk1 extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_produk' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_produk' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'deskrispi' => [
                'type' => 'TEXT',
            ],
            'produk' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'sluq_kategori' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

        ]);
        $this->forge->addKey('id_produk', true);
        $this->forge->createTable('produk1');
    }

    public function down()
    {
        $this->forge->dropTable('produk_1');
    }
} -->
