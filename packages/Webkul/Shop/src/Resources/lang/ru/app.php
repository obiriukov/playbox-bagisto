<?php

return [
    'invalid_vat_format' => 'The given vat id has a wrong format',
    'security-warning' => 'Suspicious activity found!!!',
    'nothing-to-delete' => 'Nothing to delete',

    'layouts' => [
        'my-account' => 'Аккаунт',
        'profile' => 'Профиль',
        'address' => 'Адрес',
        'reviews' => 'Отзывы',
        'wishlist' => 'Сохраненные',
        'orders' => 'Заказы',
        'downloadable-products' => 'Загружаемые Заказы'
    ],

    'common' => [
        'error' => 'Что-то пошло не так, попробуйте еще раз',
        'no-result-found' => 'Не найдено ни одной записи.'
    ],

    'home' => [
        'page-title' => config('app.name') . ' - Главная',
        'featured-products' => 'Рекомендуем',
        'new-products' => 'Новинки',
        'verify-email' => 'Подтвердите email',
        'resend-verify-email' => 'Отправить еще раз'
    ],

    'header' => [
        'title' => 'Аккаунт',
        'dropdown-text' => 'Изменение корзины, заказов и списка сохраненных',
        'sign-in' => 'Вход',
        'sign-up' => 'Регистрация',
        'account' => 'Аккаунт',
        'cart' => 'Корзина',
        'profile' => 'Профиль',
        'wishlist' => 'Сохраненные',
        'cart' => 'Корзина',
        'logout' => 'Выйти',
        'search-text' => 'Поиск'
    ],

    'minicart' => [
        'view-cart' => 'Посмотреть Корзину',
        'checkout' => 'Заказать',
        'cart' => 'Корзина',
        'zero' => '0'
    ],

    'footer' => [
        'subscribe-newsletter' => 'Подписаться на рассылку',
        'subscribe' => 'Подписаться',
        'locale' => 'Язык',
        'currency' => 'Валюта',
    ],

    'subscription' => [
        'unsubscribe' => 'Отписаться',
        'subscribe' => 'Подписаться',
        'subscribed' => 'You are now subscribed to subscription emails.',
        'not-subscribed' => 'You can not be subscribed to subscription emails, please try again later.',
        'already' => 'You are already subscribed to our subscription list.',
        'unsubscribed' => 'You are unsubscribed from subscription mails.',
        'already-unsub' => 'You are already unsubscribed.',
        'not-subscribed' => 'Error! Mail can not be sent currently, please try again later.'
    ],

    'search' => [
        'no-results' => 'Ничего не найдено',
        'page-title' => config('app.name') . ' - Поиск',
        'found-results' => 'Мы нашли для вас',
        'found-result' => 'Мы нашли для вас'
    ],

    'reviews' => [
        'title' => 'Название',
        'add-review-page-title' => 'Добавить отзыв',
        'write-review' => 'Написать отзыв',
        'review-title' => 'Напишите название отзыва',
        'product-review-page-title' => 'Отзыв о продукте',
        'rating-reviews' => 'Рейтинги и отзывы',
        'submit' => 'ОТПРАВИТЬ',
        'delete-all' => 'Все результаты удалены успешно',
        'ratingreviews' => 'Рейтинг :rating | Отзывов :review',
        'star' => 'Звезда',
        'percentage' => ':percentage %',
        'id-star' => 'звезда',
        'name' => 'Имя',
    ],

    'customer' => [
        'signup-text' => [
            'account_exists' => 'У вас уже есть аккаунт',
            'title' => 'Войти'
        ],

        'signup-form' => [
            'page-title' => 'Создать новый аккаунт',
            'title' => 'Регистрация',
            'firstname' => 'Имя',
            'lastname' => 'Фамилия',
            'email' => 'Email',
            'password' => 'Пароль',
            'confirm_pass' => 'Подтвердите пароль',
            'button_title' => 'Регистрация',
            'agree' => 'Согласен',
            'terms' => 'Условия',
            'conditions' => 'Положения',
            'using' => 'используя этот вебсайт',
            'agreement' => 'Соглашение',
            'success' => 'Аккаунт успешно создан.',
            'success-verify' => 'Аккаунт успешно создан, на ваш e-mail отправлено письмо для подтверждения.',
            'success-verify-email-unsent' => 'Аккаунт успешно создан, но письмо для подтверждения НЕ отправлено на ваш e-mail.',
            'failed' => 'Ошибка! Невозможно создать аккаунт, попробуйте позже.',
            'already-verified' => 'Ваш аккаунт уже подтвержден или попробуйте еще раз отправить письмо для подтверждения.',
            'verification-not-sent' => 'Ошибка! Проблема при отправке письма, попробуйте позже.',
            'verification-sent' => 'Письмо для подтверждения отправлено',
            'verified' => 'Ваш аккаунт подтвержден, попробуйте войти.',
            'verify-failed' => 'We cannot verify your mail account.',
            'dont-have-account' => 'You do not have account with us.',
            'success' => 'Account Created Successfully',
            'success-verify' => 'Account Created Successfully, an e-mail has been sent for verification.',
            'success-verify-email-unsent' => 'Account created successfully, but verification e-mail unsent',
            'failed' => 'Error! Cannot Create Your Account, Try Again Later',
            'already-verified' => 'Your Account is already verified Or Please Try Sending A New Verification Email Again',
            'verification-not-sent' => 'Error! Problem In Sending Verification Email, Try Again Later',
            'verification-sent' => 'Verification Email Sent',
            'verified' => 'Your Account Has Been Verified, Try To Login Now',
            'verify-failed' => 'We Cannot Verify Your Mail Account',
            'dont-have-account' => 'You Do Not Have Account With Us',
            'customer-registration' => 'Customer Registered Successfully'
        ],

        'login-text' => [
            'no_account' => 'У вас нет аккаунта',
            'title' => 'Регистрация',
        ],

        'login-form' => [
            'page-title' => 'Customer Login',
            'title' => 'Sign In',
            'email' => 'Email',
            'password' => 'Password',
            'forgot_pass' => 'Forgot Password?',
            'button_title' => 'Sign In',
            'remember' => 'Remember Me',
            'footer' => '© Copyright :year Webkul Software, All rights reserved',
            'invalid-creds' => 'Please check your credentials and try again.',
            'verify-first' => 'Verify your email account first.',
            'not-activated' => 'Your activation seeks admin approval',
            'resend-verification' => 'Resend verification mail again'
        ],

        'forgot-password' => [
            'title' => 'Recover Password',
            'email' => 'Email',
            'submit' => 'Send Password Reset Email',
            'page_title' => 'Forgot your password ?'
        ],

        'reset-password' => [
            'title' => 'Reset Password',
            'email' => 'Registered Email',
            'password' => 'Password',
            'confirm-password' => 'Confirm Password',
            'back-link-title' => 'Back to Sign In',
            'submit-btn-title' => 'Reset Password'
        ],

        'account' => [
            'dashboard' => 'Edit Profile',
            'menu' => 'Menu',

            'profile' => [
                'index' => [
                    'page-title' => 'Profile',
                    'title' => 'Profile',
                    'edit' => 'Edit',
                ],

                'edit-success' => 'Profile updated successfully.',
                'edit-fail' => 'Error! Profile cannot be updated, please try again later.',
                'unmatch' => 'The old password does not match.',

                'fname' => 'First Name',
                'lname' => 'Last Name',
                'gender' => 'Gender',
                'other' => 'Other',
                'male' => 'Male',
                'female' => 'Female',
                'dob' => 'Date Of Birth',
                'phone' => 'Phone',
                'email' => 'Email',
                'opassword' => 'Old Password',
                'password' => 'Password',
                'cpassword' => 'Confirm Password',
                'submit' => 'Update Profile',

                'edit-profile' => [
                    'title' => 'Edit Profile',
                    'page-title' => 'Edit Profile Form'
                ]
            ],

            'address' => [
                'index' => [
                    'page-title' => 'Address',
                    'title' => 'Address',
                    'add' => 'Add Address',
                    'edit' => 'Edit',
                    'empty' => 'You do not have any saved addresses here, please try to create it by clicking the link below',
                    'create' => 'Create Address',
                    'delete' => 'Delete',
                    'make-default' => 'Make Default',
                    'default' => 'Default',
                    'contact' => 'Contact',
                    'confirm-delete' =>  'Do you really want to delete this address?',
                    'default-delete' => 'Default address cannot be changed.',
                    'enter-password' => 'Enter Your Password.',
                ],

                'create' => [
                    'page-title' => 'Add Address Form',
                    'company_name' => 'Company name',
                    'first_name' => 'First name',
                    'last_name' => 'Last name',
                    'vat_id' => 'Vat id',
                    'vat_help_note' => '[Note: Use Country Code with VAT Id. Eg. INV01234567891]',
                    'title' => 'Add Address',
                    'street-address' => 'Street Address',
                    'country' => 'Country',
                    'state' => 'State',
                    'select-state' => 'Select a region, state or province',
                    'city' => 'City',
                    'postcode' => 'Postal Code',
                    'phone' => 'Phone',
                    'submit' => 'Save Address',
                    'success' => 'Address have been successfully added.',
                    'error' => 'Address cannot be added.'
                ],

                'edit' => [
                    'page-title' => 'Edit Address',
                    'company_name' => 'Company name',
                    'first_name' => 'First name',
                    'last_name' => 'Last name',
                    'vat_id' => 'Vat id',
                    'title' => 'Edit Address',
                    'street-address' => 'Street Address',
                    'submit' => 'Save Address',
                    'success' => 'Address updated successfully.',
                ],
                'delete' => [
                    'success' => 'Address successfully deleted',
                    'failure' => 'Address cannot be deleted',
                    'wrong-password' => 'Wrong Password !'
                ]
            ],

            'order' => [
                'index' => [
                    'page-title' => 'Orders',
                    'title' => 'Orders',
                    'order_id' => 'Order ID',
                    'date' => 'Date',
                    'status' => 'Status',
                    'total' => 'Total',
                    'order_number' => 'Order Number'
                ],

                'view' => [
                    'page-tile' => 'Order #:order_id',
                    'info' => 'Information',
                    'placed-on' => 'Placed On',
                    'products-ordered' => 'Products Ordered',
                    'invoices' => 'Invoices',
                    'shipments' => 'Shipments',
                    'SKU' => 'SKU',
                    'product-name' => 'Name',
                    'qty' => 'Qty',
                    'item-status' => 'Item Status',
                    'item-ordered' => 'Ordered (:qty_ordered)',
                    'item-invoice' => 'Invoiced (:qty_invoiced)',
                    'item-shipped' => 'shipped (:qty_shipped)',
                    'item-canceled' => 'Canceled (:qty_canceled)',
                    'item-refunded' => 'Refunded (:qty_refunded)',
                    'price' => 'Price',
                    'total' => 'Total',
                    'subtotal' => 'Subtotal',
                    'shipping-handling' => 'Shipping & Handling',
                    'tax' => 'Tax',
                    'discount' => 'Discount',
                    'tax-percent' => 'Tax Percent',
                    'tax-amount' => 'Tax Amount',
                    'discount-amount' => 'Discount Amount',
                    'grand-total' => 'Grand Total',
                    'total-paid' => 'Total Paid',
                    'total-refunded' => 'Total Refunded',
                    'total-due' => 'Total Due',
                    'shipping-address' => 'Shipping Address',
                    'billing-address' => 'Billing Address',
                    'shipping-method' => 'Shipping Method',
                    'payment-method' => 'Payment Method',
                    'individual-invoice' => 'Invoice #:invoice_id',
                    'individual-shipment' => 'Shipment #:shipment_id',
                    'print' => 'Print',
                    'invoice-id' => 'Invoice Id',
                    'order-id' => 'Order Id',
                    'order-date' => 'Order Date',
                    'bill-to' => 'Bill to',
                    'ship-to' => 'Ship to',
                    'contact' => 'Contact',
                    'refunds' => 'Refunds',
                    'individual-refund' => 'Refund #:refund_id',
                    'adjustment-refund' => 'Adjustment Refund',
                    'adjustment-fee' => 'Adjustment Fee',
                ]
            ],

            'wishlist' => [
                'page-title' => 'Wishlist',
                'title' => 'Wishlist',
                'deleteall' => 'Delete All',
                'moveall' => 'Move All Products To Cart',
                'move-to-cart' => 'Move To Cart',
                'error' => 'Cannot add product to wishlist due to unknown problems, please checkback later',
                'add' => 'Item successfully added to wishlist',
                'remove' => 'Item successfully removed from wishlist',
                'moved' => 'Item successfully moved To cart',
                'option-missing' => 'Product options are missing, so item can not be moved to the wishlist.',
                'move-error' => 'Item cannot be moved to wishlist, Please try again later',
                'success' => 'Item successfully added to wishlist',
                'failure' => 'Item cannot be added to wishlist, Please try again later',
                'already' => 'Item already present in your wishlist',
                'removed' => 'Item successfully removed from wishlist',
                'remove-fail' => 'Item cannot Be removed from wishlist, Please try again later',
                'empty' => 'You do not have any items in your wishlist',
                'remove-all-success' => 'All the items from your wishlist have been removed',
            ],

            'downloadable_products' => [
                'title' => 'Downloadable Products',
                'order-id' => 'Order Id',
                'date' => 'Date',
                'name' => 'Title',
                'status' => 'Status',
                'pending' => 'Pending',
                'available' => 'Available',
                'expired' => 'Expired',
                'remaining-downloads' => 'Remaining Downloads',
                'unlimited' => 'Unlimited',
                'download-error' => 'Download link has been expired.'
            ],

            'review' => [
                'index' => [
                    'title' => 'Reviews',
                    'page-title' => 'Reviews'
                ],

                'view' => [
                    'page-tile' => 'Review #:id',
                ]
            ]
        ]
    ],

    'products' => [
        'layered-nav-title' => 'Сортировать по',
        'price-label' => 'As low as',
        'remove-filter-link-title' => 'Clear All',
        'sort-by' => 'Сортировать по',
        'from-a-z' => 'От А до Я',
        'from-z-a' => 'От Я до А',
        'newest-first' => 'Вначале новые',
        'oldest-first' => 'Вначале старые',
        'cheapest-first' => 'Вначале дешевые',
        'expensive-first' => 'Вначале дорогие',
        'show' => 'Показывать',
        'pager-info' => 'Показано :showing из :total позиций',
        'description' => 'Описание',
        'specification' => 'Характеристики',
        'total-reviews' => ':total Reviews',
        'total-rating' => ':total_rating Ratings & :total_reviews Reviews',
        'by' => 'By :name',
        'up-sell-title' => 'Мы нашли другие товары, которые могут быть вам интересны!',
        'related-product-title' => 'Сопутствующие товары',
        'cross-sell-title' => 'Больше вариантов',
        'reviews-title' => 'Оценки и отзывы',
        'write-review-btn' => 'Оставить отзыв',
        'choose-option' => 'Выберите вариант',
        'sale' => 'Распродажа',
        'new' => 'Новинка',
        'empty' => 'Нет доступных товаров в данной категории',
        'add-to-cart' => 'Добавить в корзину',
        'buy-now' => 'Купить сейчас',
        'whoops' => 'Извините!',
        'quantity' => 'Количество',
        'in-stock' => 'В наличии',
        'out-of-stock' => 'Нет в наличии',
        'view-all' => 'Просмотреть всё',
        'select-above-options' => 'Пожалуйста выберите опцию выше.',
        'less-quantity' => 'Количество не может быть меньше одного',
        'samples' => 'Примеры',
        'links' => 'Ссылки',
        'sample' => 'Пример',
        'name' => 'Имя',
        'qty' => 'Кол',
        'starting-at' => 'Начиная от',
        'customize-options' => 'Customize Options',
        'choose-selection' => 'Выбрать',
        'your-customization' => 'Your Customization',
        'total-amount' => 'Всего',
        'none' => 'Нет'
    ],

    // 'reviews' => [
    //     'empty' => 'You Have Not Reviewed Any Of Product Yet'
    // ]

    'buynow' => [
        'no-options' => 'Please select options before buying this product.'
    ],

    'checkout' => [
        'cart' => [
            'integrity' => [
                'missing_fields' => 'Some required fields missing for this product.',
                'missing_options' => 'Options are missing for this product.',
                'missing_links' => 'Downloadable links are missing for this product.',
                'qty_missing' => 'Atleast one product should have more than 1 quantity.',
                'qty_impossible' => 'Cannot add more than one of these products to cart.'
            ],
            'create-error' => 'Encountered some issue while making cart instance.',
            'title' => 'Shopping Cart',
            'empty' => 'Your shopping cart is empty',
            'update-cart' => 'Update Cart',
            'continue-shopping' => 'Continue Shopping',
            'proceed-to-checkout' => 'Proceed To Checkout',
            'remove' => 'Remove',
            'remove-link' => 'Remove',
            'move-to-wishlist' => 'Move to Wishlist',
            'move-to-wishlist-success' => 'Item moved to wishlist successfully.',
            'move-to-wishlist-error' => 'Cannot move item to wishlist, please try again later.',
            'add-config-warning' => 'Please select option before adding to cart.',
            'quantity' => [
                'quantity' => 'Quantity',
                'success' => 'Cart Item(s) successfully updated.',
                'illegal' => 'Quantity cannot be lesser than one.',
                'inventory_warning' => 'The requested quantity is not available, please try again later.',
                'error' => 'Cannot update the item(s) at the moment, please try again later.'
            ],

            'item' => [
                'error_remove' => 'No items to remove from the cart.',
                'success' => 'Item was successfully added to cart.',
                'success-remove' => 'Item was removed successfully from the cart.',
                'error-add' => 'Item cannot be added to cart, please try again later.',
            ],
            'quantity-error' => 'Requested quantity is not available.',
            'cart-subtotal' => 'Cart Subtotal',
            'cart-remove-action' => 'Do you really want to do this ?',
            'partial-cart-update' => 'Only some of the product(s) were updated',
            'link-missing' => ''
        ],

        'onepage' => [
            'title' => 'Checkout',
            'information' => 'Information',
            'shipping' => 'Shipping',
            'payment' => 'Payment',
            'complete' => 'Complete',
            'billing-address' => 'Billing Address',
            'sign-in' => 'Sign In',
            'company-name' => 'Company Name',
            'first-name' => 'First Name',
            'last-name' => 'Last Name',
            'email' => 'Email',
            'address1' => 'Street Address',
            'city' => 'City',
            'state' => 'State',
            'select-state' => 'Select a region, state or province',
            'postcode' => 'Zip/Postcode',
            'phone' => 'Telephone',
            'country' => 'Country',
            'order-summary' => 'Order Summary',
            'shipping-address' => 'Shipping Address',
            'use_for_shipping' => 'Ship to this address',
            'continue' => 'Continue',
            'shipping-method' => 'Select Shipping Method',
            'payment-methods' => 'Select Payment Method',
            'payment-method' => 'Payment Method',
            'summary' => 'Order Summary',
            'price' => 'Price',
            'quantity' => 'Quantity',
            'billing-address' => 'Billing Address',
            'shipping-address' => 'Shipping Address',
            'contact' => 'Contact',
            'place-order' => 'Place Order',
            'new-address' => 'Add New Address',
            'save_as_address' => 'Save this address',
            'apply-coupon' => 'Apply Coupon',
            'amt-payable' => 'Amount Payable',
            'got' => 'Got',
            'free' => 'Free',
            'coupon-used' => 'Coupon Used',
            'applied' => 'Applied',
            'back' => 'Back',
            'cash-desc' => 'Cash On Delivery',
            'money-desc' => 'Money Transfer',
            'paypal-desc' => 'Paypal Standard',
            'free-desc' => 'This is a free shipping',
            'flat-desc' => 'This is a flat rate',
            'password' => 'Password',
            'login-exist-message' => 'You already have an account with us, Sign in or continue as guest.',
            'enter-coupon-code' => 'Enter Coupon Code'
        ],

        'total' => [
            'order-summary' => 'Order Summary',
            'sub-total' => 'Items',
            'grand-total' => 'Grand Total',
            'delivery-charges' => 'Delivery Charges',
            'tax' => 'Tax',
            'discount' => 'Discount',
            'price' => 'price',
            'disc-amount' => 'Amount discounted',
            'new-grand-total' => 'New Grand Total',
            'coupon' => 'Coupon',
            'coupon-applied' => 'Applied Coupon',
            'remove-coupon' => 'Remove Coupon',
            'cannot-apply-coupon' => 'Cannot Apply Coupon',
            'invalid-coupon' => 'Coupon code is invalid.',
            'success-coupon' => 'Coupon code applied successfully.',
            'coupon-apply-issue' => 'Coupon code can\'t be applied.'
        ],

        'success' => [
            'title' => 'Order successfully placed',
            'thanks' => 'Thank you for your order!',
            'order-id-info' => 'Your order id is #:order_id',
            'info' => 'We will email you, your order details and tracking information'
        ]
    ],

    'mail' => [
        'order' => [
            'subject' => 'New Order Confirmation',
            'heading' => 'Order Confirmation!',
            'dear' => 'Dear :customer_name',
            'dear-admin' => 'Dear :admin_name',
            'greeting' => 'Thanks for your Order :order_id placed on :created_at',
            'greeting-admin' => 'Order Id :order_id placed on :created_at',
            'summary' => 'Summary of Order',
            'shipping-address' => 'Shipping Address',
            'billing-address' => 'Billing Address',
            'contact' => 'Contact',
            'shipping' => 'Shipping Method',
            'payment' => 'Payment Method',
            'price' => 'Price',
            'quantity' => 'Quantity',
            'subtotal' => 'Subtotal',
            'shipping-handling' => 'Shipping & Handling',
            'tax' => 'Tax',
            'discount' => 'Discount',
            'grand-total' => 'Grand Total',
            'final-summary' => 'Thanks for showing your interest in our store we will send you tracking number once it shipped',
            'help' => 'If you need any kind of help please contact us at :support_email',
            'thanks' => 'Thanks!',
            'cancel' => [
                'subject' => 'Order Cancel Confirmation',
                'heading' => 'Order Cancelled',
                'dear' => 'Dear :customer_name',
                'greeting' => 'You Order with order id #:order_id placed on :created_at has been cancelled',
                'summary' => 'Summary of Order',
                'shipping-address' => 'Shipping Address',
                'billing-address' => 'Billing Address',
                'contact' => 'Contact',
                'shipping' => 'Shipping Method',
                'payment' => 'Payment Method',
                'subtotal' => 'Subtotal',
                'shipping-handling' => 'Shipping & Handling',
                'tax' => 'Tax',
                'discount' => 'Discount',
                'grand-total' => 'Grand Total',
                'final-summary' => 'Thanks for showing your interest in our store',
                'help' => 'If you need any kind of help please contact us at :support_email',
                'thanks' => 'Thanks!',
            ]
        ],

        'invoice' => [
            'heading' => 'Your invoice #:invoice_id for Order #:order_id',
            'subject' => 'Invoice for your order #:order_id',
            'summary' => 'Summary of Invoice',
        ],

        'shipment' => [
            'heading' => 'Shipment #:shipment_id  has been generated for Order #:order_id',
            'inventory-heading' => 'New shipment #:shipment_id had been generated for Order #:order_id',
            'subject' => 'Shipment for your order #:order_id',
            'inventory-subject' => 'New shipment had been generated for Order #:order_id',
            'summary' => 'Summary of Shipment',
            'carrier' => 'Carrier',
            'tracking-number' => 'Tracking Number',
            'greeting' => 'An order :order_id has been placed on :created_at',
        ],

        'refund' => [
            'heading' => 'Your Refund #:refund_id for Order #:order_id',
            'subject' => 'Refund for your order #:order_id',
            'summary' => 'Summary of Refund',
            'adjustment-refund' => 'Adjustment Refund',
            'adjustment-fee' => 'Adjustment Fee'
        ],

        'forget-password' => [
            'subject' => 'Customer Reset Password',
            'dear' => 'Dear :name',
            'info' => 'You are receiving this email because we received a password reset request for your account',
            'reset-password' => 'Reset Password',
            'final-summary' => 'If you did not request a password reset, no further action is required',
            'thanks' => 'Спасибо!'
        ],

        'customer' => [
            'new' => [
                'dear' => 'Привет, :customer_name',
                'username-email' => 'Логин/Email',
                'subject' => 'Регистрация нового пользователя',
                'password' => 'Пароль',
                'summary' => 'Ваш аккаунт создан.
                Детали ниже: ',
                'thanks' => 'Спасибо!',
            ],

            'registration' => [
                'subject' => 'Регистрация нового пользователя',
                'customer-registration' => 'Новый пользователь зарегистрирован',
                'dear' => 'Привет, :customer_name',
                'greeting' => 'Добро пожаловать и спасибо, что вы с нами!',
                'summary' => 'Ваша учетная запись была успешно создана, и вы можете войти, используя свой адрес электронной почты и пароль. После входа в систему вы сможете получить доступ к другим услугам, включая просмотр прошлых заказов, списков пожеланий и редактирование информации о вашей учетной записи.',
                'thanks' => 'Спасибо!',
            ],

            'verification' => [
                'heading' => config('app.name') . ' - Email Verification',
                'subject' => 'Verification Mail',
                'verify' => 'Verify Your Account',
                'summary' => 'This is the mail to verify that the email address you entered is yours.
                Kindly click the Verify Your Account button below to verify your account.'
            ],

            'subscription' => [
                'subject' => 'Subscription Email',
                'greeting' => ' Welcome to ' . config('app.name') . ' - Email Subscription',
                'unsubscribe' => 'Unsubscribe',
                'summary' => 'Thanks for putting me into your inbox. It’s been a while since you’ve read ' . config('app.name') . ' email, and we don’t want to overwhelm your inbox. If you still do not want to receive
                the latest email marketing news then for sure click the button below.'
            ]
        ]
    ],

    'webkul' => [
        'copy-right' => '© Copyright :year Webkul Software, Все права защищены',
    ],

    'response' => [
        'create-success' => ':name создан успешно.',
        'update-success' => ':name обновлен успешно.',
        'delete-success' => ':name удален успешно.',
        'submit-success' => ':name отправлен успешно.'
    ],
];
