<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data['header_title'] = 'Адмін-панель';
        $data['active_class'] = 'dashboard';

        $data['menu_count'] = \App\Models\MenuModel::getActiveMenuCount();
        $data['user_count'] = \App\Models\User::getActiveUserCount();
        $data['assort_count'] = \App\Models\AssortModel::getActiveAssortCount();
        $data['page_count'] = \App\Models\PageModel::getActivePageCount();
        $data['reservation_count'] = \App\Models\Reservation::getActiveReservationCount();
        $data['assort_comment_count'] = \App\Models\AssortCommentModel::getActiveAssortCommentCount();
        $data['portfolio_count'] = \App\Models\PortfolioModel::getActivePortfolioCount();

        return view('backend.dashboard', $data);
    }
}
