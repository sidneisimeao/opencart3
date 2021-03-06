<?php
class ControllerCommonMenu extends Controller
{
	public function index()
	{


		$this->load->language('common/menu');

		// Menu
		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getAllCategoryTree();

		foreach ($categories as $category) {
			// Acumula nivel 1
			if (empty($data['categories'][$category['c1_id']])) {
				$data['categories'][$category['c1_id']] = [
					'name' => $category['c1_name'],
					'children' => []
				];
			}
			// Acumula nivel 2
			if (empty($data['categories'][$category['c1_id']]['children'][$category['c2_id']])) {
				$data['categories'][$category['c1_id']]['children'][$category['c2_id']] = [
					'name' => $category['c2_name'],
					'children' => []
				];
			}
			// Acumula nivel 3
			if (empty($data['categories'][$category['c1_id']]['children'][$category['c2_id']]['children'][$category['c3_id']])) {
				$data['categories'][$category['c1_id']]['children'][$category['c2_id']]['children'][$category['c3_id']] = [
					'name' => $category['c3_name'],
					'children' => []
				];
			}
			// Acumula nivel 4
			if (empty($data['categories'][$category['c1_id']]['children'][$category['c2_id']]['children'][$category['c3_id']]['children'][$category['c4_id']])) {
				$category_link = "{$category['c1_id']}_{$category['c2_id']}_{$category['c3_id']}_{$category['c4_id']}";
				$data['categories'][$category['c1_id']]['children'][$category['c2_id']]['children'][$category['c3_id']]['children'][$category['c4_id']] = [
					'name' => $category['c4_name'],
					'href' => $this->url->link('product/category', 'path=' . $category_link)
				];
			}
		}

		//print '<pre>';
		//	print_r($data['categories']);

		/*
		foreach ($categories as $category) {
			if ($category['top']) {
				// Level 2
				$children_data = array();

				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach ($children as $child) {
					$filter_data = array(
						'filter_category_id'  => $child['category_id'],
						'filter_sub_category' => true
					);

					$children_data[] = array(
						'name'  => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
						'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
					);
				}

				// Level 1
				$data['categories'][] = array(
					'name'     => $category['name'],
					'children' => $children_data,
					'column'   => $category['column'] ? $category['column'] : 1,
					'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
				);
			}
		}
		*/

		return $this->load->view('common/menu', $data);
	}
}
