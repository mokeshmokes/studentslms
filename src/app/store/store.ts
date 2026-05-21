import { configureStore } from "@reduxjs/toolkit";
import sidebarReducer from "./sidebarSlice";

export const store = configureStore({
  reducer: {
    sidebar: sidebarReducer,
  },
});

// Inferred types for use throughout the app
export type RootState = ReturnType<typeof store.getState>;
export type AppDispatch = typeof store.dispatch;
