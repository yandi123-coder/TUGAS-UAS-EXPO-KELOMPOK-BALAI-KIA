<!-- <?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KategoriTest extends Migration
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
            'nama_kategori' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tanggal_input' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'tanggal_ubah' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'hotel' => [
                'type' => 'VARCHAR',
            ]
        ]);
        $this->forge->addKey('id_kategori', true);
        $this->forge->createTable('kategori_produk');
    }

    public function down()
    {
        $this->forge->dropTable('kategori_produk');
    }
} -->
