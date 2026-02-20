# Mitsuki Attributes

**Lightweight PHP 8 Metadata library for the Mitsuki Framework.**

This package provides a set of native PHP 8 Attributes to define routing and controller configurations. By separating attributes into this standalone library, your application stays decoupled, and your domain logic remains clean.

---

## ✨ Features

* **Zero Dependencies**: Extremely light footprint with no external requirements.
* **PHP 8+ Native**: Leveraging the power of native attributes (no more DocBlock annotations).
* **Highly Decoupled**: Can be used in any project that needs a standardized way to mark controllers and routes.
* **Strictly Typed**: Fully compatible with static analysis tools like PHPStan or Psalm.

---

## 🚀 Installation

You can install the package via Composer:

```bash
composer require mitsuki/attributes

```

---

## 🛠 Usage

This library provides two main attributes to decorate your classes and methods.

### 1. The `Controller` Attribute

Used at the **class level** to define a base prefix for all routes within that controller.

```php
use Mitsuki\Attributes\Controller;

#[Controller(baseUri: '/api/v1')]
class UserController 
{
    // ...
}

```

### 2. The `Route` Attribute

Used at the **method level** to define the specific path, name, and allowed HTTP methods.

```php
use Mitsuki\Attributes\Route;

class UserController 
{
    #[Route(name: 'user_show', path: '/user/{id}', methods: ['GET'])]
    public function show(int $id) 
    {
        // Your logic here...
    }
}

```

---

## 🏗 Architecture

The Attributes act as a bridge between your code and the **Mitsuki Router**.

1. **Definition**: You decorate your code with `#[Route]`.
2. **Reflection**: The Mitsuki Router/Controller-Resolver reads these attributes using PHP's `ReflectionClass`.
3. **Execution**: The framework configures the routing table based on this metadata.

---

## 📝 API Reference

### `Mitsuki\Attributes\Controller`

| Parameter | Type | Description |
| --- | --- | --- |
| `$baseUri` | `string` | The prefix for all routes in the class. |

### `Mitsuki\Attributes\Route`

| Parameter | Type | Description |
| --- | --- | --- |
| `$name` | `string` | Unique identifier for the route. |
| `$path` | `string` | The URL pattern. |
| `$methods` | `array|string` | Allowed HTTP methods (e.g., `"GET"` or `["POST", "DELETE"]`). |

---

## 🤝 Contributing

If you want to add new attributes to the Mitsuki ecosystem:

1. Fork the repository.
2. Create your attribute class.
3. Submit a Pull Request.

---

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](https://www.google.com/search?q=LICENSE) file for details.

**Maintained by [Zgenius Matondo**](https://github.com/zgeniuscoders)

---