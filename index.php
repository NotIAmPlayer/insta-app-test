<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InstaApp</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="lg:w-1/2 h-full min-h-screen ml-auto grid grid-cols-1 items-center">
        <div>
            <div class="mx-4 my-4 w-full lg:w-3/4 2xl:w-1/2 bg-slate-200 px-4 py-8 rounded-2xl">
                <h1 class="font-serif text-3xl mb-4 text-center select-none">InstaApp</h1>
                <form method="post" class="my-2 w-7/10 mx-auto" name="login_form">
                    <input
                        type="email"
                        class="w-full px-2 py-1 border border-slate-500 rounded-xl focus:outline-none hover:outline-none
                        focus:border-blue-600 hover:border-blue-600 mb-2 bg-white"
                        name="email"
                        placeholder="E-mail"
                    />
                    <div
                        class="w-full px-2 py-1 border border-slate-500 rounded-xl focus:border-blue-600
                        hover:border-blue-600 mb-2 bg-white flex">
                        <input
                            class="grow focus:outline-none hover:outline-none"
                            type="password"
                            name="password"
                            placeholder="Password"
                        />
                        <button
                            class="grow-0 ml-2"
                            name="show_pass"
                            type="button"
                            onclick="toggleShowPassword()">
                            Show
                        </button>
                    </div>
                    <button
                        type="submit"
                        name="submit"
                        class="w-full bg-blue-600 hover:bg-blue-500 rounded-xl px-2 py-2 text-white">
                        Login
                    </button>
                </form>
            </div>
            <div class="mx-4 mb-4 w-full lg:w-3/4 2xl:w-1/2 bg-slate-200 px-2 py-4 rounded-2xl">
                <p class="text-center">Don't have an account? <a href="sign_up.php" class="font-bold text-blue-600 hover:text-blue-500 select-none">Sign up</a></p>
            </div>
        </div>
    </div>
</body>
<script>
    console.log(`<?php var_dump($_POST); ?>`);

    const toggleShowPassword = () => {
        let pass = document.forms["login_form"]["password"];
        let show = document.forms["login_form"]["show_pass"];

        pass.type = pass.type == "password" ? "text" : "password";
        show.innerHTML = pass.type == "password" ? "Show" : "Hide";
    }
</script>
</html>