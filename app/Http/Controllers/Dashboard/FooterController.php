<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    // عرض نموذج التعديل
    public function edit()
    {
        $footer = Footer::first();
        if (!$footer) {
            // لو ما فيه سجل ننشئ سجل جديد فارغ
            $footer = new Footer();
        }
        return view('dashboard.footer.edit', compact('footer'));
    }

    // حفظ التعديلات
    public function update(Request $request)
    {
        $footer = Footer::first();
        if (!$footer) {
            $footer = new Footer();
        }

        $validated = $request->validate([
            'number_one' => 'nullable|string|max:20',
            'number_two' => 'nullable|string|max:20',
            'short_description_one' => 'nullable|string|max:160',
            'short_description_two' => 'nullable|string|max:160',
            'address_one' => 'nullable|string|max:100',
            'address_two' => 'nullable|string|max:100',
            'address_three' => 'nullable|string|max:100',
            'email' => 'nullable|email|max:100',
            'facebook' => 'nullable|url|max:150',
            'x' => 'nullable|url|max:150',
            'instagram' => 'nullable|url|max:150',
            'Copyright' => 'nullable|string|max:100',
        ]);

        $footer->fill($validated)->save();

        return redirect()->back()->with('success', 'تم تحديث بيانات الفوتر بنجاح');
    }
}
