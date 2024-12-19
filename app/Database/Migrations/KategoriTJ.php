<!-- <?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KategoriTJ extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kategori' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kategori' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nama_produk' => [
                'type' => 'VARCHAR',
            ]
        ]);
        $this->forge->addKey('id_kategori', true);
        $this->forge->createTable('kategori2');
    }

    public function down()
    {
        $this->forge->dropTable('kategori2');
    }
} -->
