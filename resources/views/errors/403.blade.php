<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <title>403 | Access Denied</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html {
            background-color: oklch(0.145 0 0);
        }
    </style>
</head>

<body class="font-sans antialiased bg-background text-white">
    <div class="relative flex min-h-screen">
        <main class="flex-1 flex flex-col min-w-0">
            <div class="flex-1">
                <div class="min-h-screen flex items-center justify-center bg-background text-white">
                    <div class="w-full max-w-md">
                        <div class="relative overflow-hidden p-5">
                            {{-- Background decoration --}}
                            <div class="absolute inset-0 -z-10">
                                <div class="absolute top-0 left-1/4 w-96 h-96 bg-red-500/10 rounded-full blur-3xl">
                                </div>
                                <div
                                    class="absolute bottom-0 right-1/4 w-96 h-96 bg-orange-500/10 rounded-full blur-3xl">
                                </div>
                            </div>

                            <div class="text-center">
                                {{-- Animated Icon Container --}}
                                <div class="relative mb-8">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-r from-red-500 to-orange-500 rounded-3xl blur-2xl opacity-20 animate-pulse">
                                    </div>
                                    <div
                                        class="relative inline-flex items-center justify-center h-32 w-32 rounded-3xl bg-gradient-to-br from-red-500 to-orange-600 shadow-2xl shadow-red-500/30">
                                        <svg
                                            class="h-16 w-16 text-white"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="1.5"
                                                d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"
                                            />
                                        </svg>
                                    </div>
                                </div>

                                {{-- Error Code with Gradient --}}
                                <h1
                                    class="text-8xl font-black bg-gradient-to-r from-red-500 via-orange-500 to-red-600 bg-clip-text text-transparent mb-4 tracking-tight">
                                    403
                                </h1>

                                {{-- Title --}}
                                <h2 class="text-3xl font-bold text-white mb-4">Access Forbidden</h2>

                                {{-- Message Card --}}
                                <div class="max-w-md mx-auto mb-8">
                                    <div
                                        class="bg-card/50 backdrop-blur-sm border border-border/50 rounded-2xl p-6 shadow-xl">
                                        <p class="text-muted-foreground leading-relaxed">
                                            {{ $message ??
                                                `You don't have permission to access this resource. Please contact your
                                                                                                                                    administrator if you believe this is a mistake.` }}
                                        </p>
                                    </div>
                                </div>

                                {{-- Action Buttons --}}
                                <div class="flex flex-col sm:flex-row gap-3 justify-center items-center">
                                    <a
                                        href="{{ url('/') }}"
                                        class="group inline-flex items-center justify-center gap-2 px-8 py-4 bg-gradient-to-r from-red-500 to-orange-500 text-white font-semibold rounded-xl shadow-lg shadow-red-500/25 hover:shadow-xl hover:shadow-red-500/30 hover:scale-105 transition-all duration-300"
                                    >
                                        <svg
                                            class="h-5 w-5 group-hover:-translate-x-1 transition-transform"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                                            />
                                        </svg>
                                        Go Home
                                    </a>

                                    @if (url()->previous() !== url()->current())
                                        <a
                                            href="{{ url()->previous() }}"
                                            class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-secondary text-secondary-foreground font-semibold rounded-xl hover:bg-secondary/80 transition-all duration-300"
                                        >
                                            <svg
                                                class="h-5 w-5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M10 19l-7-7m0 0l7-7m-7 7h18"
                                                />
                                            </svg>
                                            Go Back
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
