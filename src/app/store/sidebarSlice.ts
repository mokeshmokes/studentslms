import { createSlice, type PayloadAction } from "@reduxjs/toolkit";

export interface SidebarState {
  collapsed: boolean;
  mobileOpen: boolean;
  activeItem: string;
}

const initialState: SidebarState = {
  collapsed: false,
  mobileOpen: false,
  activeItem: "Dashboard",
};

const sidebarSlice = createSlice({
  name: "sidebar",
  initialState,
  reducers: {
    toggleCollapsed(state) {
      state.collapsed = !state.collapsed;
    },
    setCollapsed(state, action: PayloadAction<boolean>) {
      state.collapsed = action.payload;
    },
    openMobile(state) {
      state.mobileOpen = true;
    },
    closeMobile(state) {
      state.mobileOpen = false;
    },
    setActiveItem(state, action: PayloadAction<string>) {
      state.activeItem = action.payload;
    },
  },
});

export const {
  toggleCollapsed,
  setCollapsed,
  openMobile,
  closeMobile,
  setActiveItem,
} = sidebarSlice.actions;

export default sidebarSlice.reducer;
