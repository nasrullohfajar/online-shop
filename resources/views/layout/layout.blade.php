<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Online Shop</title>
</head>

<body>
    @include('popper::assets')
    <Header>
        <Nav class="flex items-center justify-between h-16 px-20 text-[#1a1a1a] border-b shadow-sm">
            <h1 class="text-xl">Online Shop</h1>
            <div class="flex gap-x-4">
                <Button class="border-r px-4"><x-ionicon-cart class="w-6" /></Button>
                <Button class="flex flex-row"><x-ri-user-3-fill class="w-6 mr-2" /> nvce</Button>
            </div>
        </Nav>
    </Header>

    <Main>
        @yield('content')
    </Main>

    <Footer></Footer>

</body>

</html>