<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugas;

class TugasController extends Controller
{
    /**
     * Update the specified task in storage.
     */
    public function updateKeterangan(Request $request, $id)
    {
        // // Validate fields
        // $validated = $request->validate([
        //     'tugas' => 'required|string|max:255',
        //     'waktu_mulai' => 'required|date',
        //     'waktu_selesai' => 'required|date|after_or_equal:waktu_mulai',
        //     'tugas_dari' => 'nullable|string|max:255',
        //     'tugas_untuk' => 'nullable|string|max:255',
        //     'keterangan' => 'required|in:Dikerjakan,Selesai',
        //     'notes' => 'nullable|string',
        // ]);

        // // Find the task by id
        // $tugas = Tugas::findOrFail($id);

        // // Update task properties
        // $tugas->tugas = $validated['tugas'];
        // $tugas->waktu_mulai = $validated['waktu_mulai'];
        // $tugas->waktu_selesai = $validated['waktu_selesai'];
        // $tugas->tugas_dari = $validated['tugas_dari'];
        // $tugas->tugas_untuk = $validated['tugas_untuk'];
        // $tugas->keterangan = $validated['keterangan'];
        // $tugas->notes = $validated['notes'] ?? null;

        // // Save to database
        // $tugas->save();

        // // Redirect back with success message
        // return redirect()->back()->with('success', 'Tugas berhasil diperbarui.');
    }
}

