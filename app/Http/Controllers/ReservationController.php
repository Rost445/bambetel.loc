<?php
namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    // --- Список активних заявок ---
    public function list(Request $request)
    {
        $query = Reservation::query();

        if ($request->filled('q')) {
            $query->where(function($q) use ($request) {
                $q->where('name', 'like', "%{$request->q}%")
                  ->orWhere('phone', 'like', "%{$request->q}%")
                  ->orWhere('email', 'like', "%{$request->q}%");
            });
        }

        $data['reservations'] = $query->orderBy('id', 'desc')->paginate(20);
        $data['header_title'] = "Бронювання";
          $data['isTrash'] = false; // це активні заявки

        return view('backend.reservations.list', $data);
    }

    // --- Детальний перегляд ---
    public function view($id)
    {
        $data['header_title'] = "Деталі бронювання";
        $data['item'] = Reservation::findOrFail($id);

        return view('backend.reservations.view', $data);
    }

    // --- Видалення (SoftDelete) ---
    public function delete($id)
    {
        $item = Reservation::findOrFail($id);
        $item->delete();

        return redirect()
            ->route('panel.reservations.list')
            ->with('success', 'Бронювання переміщено до кошика');
    }

    // --- Список видалених ---
    public function trash()
    {
        $data['header_title'] = "Кошик бронювань";
        $data['reservations'] = Reservation::onlyTrashed()->orderBy('id', 'desc')->paginate(20);
   $data['isTrash'] = true; // це кошик
        return view('backend.reservations.trash', $data);
    }

    // --- Відновлення ---
    public function restore($id)
    {
        Reservation::onlyTrashed()->where('id', $id)->restore();

        return redirect()
            ->route('panel.reservations.trash')
            ->with('success', 'Бронювання відновлено');
    }
}
