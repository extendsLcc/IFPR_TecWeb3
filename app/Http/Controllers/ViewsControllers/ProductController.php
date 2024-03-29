<?php

namespace App\Http\Controllers\ViewsControllers;

use App\Helpers\Toast;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function __construct(private ProductRepository $productRepository)
    {
    }


    public function create()
    {
        return view('pages.produtos.create.view');
    }

    public function index(Request $request)
    {
        $page = $request->query('per_page', 10);
        $order = $request->query('order', 'id');
        $sort = $request->query('sort', 'asc');

        return view('pages.produtos.index.view', [
            'products' => $this->productRepository->fetch(
                perPage: $page,
                order: $order,
                sort: $sort
            )
        ]);
    }

    public function show(int $id)
    {
        return view('pages.produtos.show.view', [
            'product' => $this->productRepository->find($id),
        ]);
    }


    public function store(StoreProductRequest $storeProductRequest)
    {
        $createdProduct = $this->productRepository->store($storeProductRequest->validated());
        return response()
            ->redirectToRoute('produtos.index')
            ->with(Toast::showSuccess("Produto ({$createdProduct->id}) cadastrado som sucesso!"));
    }

    public function edit(int $id)
    {
        return view('pages.produtos.edit.view', [
            'product' => $this->productRepository->find($id),
        ]);
    }

    public function update(StoreProductRequest $storeProductRequest)
    {
        $productId = request()->route('produto');
        $this->productRepository->update($storeProductRequest->validated(), $productId);
        return back()
            ->with(Toast::showSuccess('Dados atualizados com sucesso!'));
    }

    public function destroy(int $id)
    {
        $product = Product::find($id);
        if (is_null($product)) {
            return response(status: Response::HTTP_NOT_FOUND);
        }
        $product->delete();
        return response(status: Response::HTTP_OK);
    }

}
