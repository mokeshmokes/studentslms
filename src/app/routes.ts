import { createBrowserRouter } from "react-router";
import Login from "./pages/Login";
import Register from "./pages/Register";
import Dashboard from "./pages/Dashboard";
import ForgotPassword from "./pages/Forgetpassword";

export const router = createBrowserRouter([
  { path: "/", Component: Login },
  { path: "/register", Component: Register },
  { path: "/dashboard", Component: Dashboard },
  { path: "/forgot-password", Component: ForgotPassword },
]);
